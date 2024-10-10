public function edit()
{
    return view('user.edit', ['user' => auth()->user()]);
}

public function update(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
    ]);

    $user = auth()->user();
    $user->update($request->only('name', 'email'));

    return redirect()->route('profile')->with('success', 'Profile updated successfully.');
}
