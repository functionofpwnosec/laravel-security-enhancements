use App\Notifications\NewDeviceLogin;

public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Kirim notifikasi jika login dari IP baru
        if (session()->get('last_ip_address') !== $request->ip()) {
            auth()->user()->notify(new NewDeviceLogin($request->ip()));
        }

        session(['last_ip_address' => $request->ip()]); // Simpan IP terakhir
        return redirect()->route('welcome');
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
}
