<?php



$user = DB::table('users')->where('id', $request->id)->first();

if (empty($request->users_foto)) {
    if (empty($user->users_foto)){
        $file_name = null;
    }else{
        $file_name = $user->users_foto;
    }

} else {
    if ($request->hasFile('users_foto')) {
        $request->validate([
            'users_foto' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $file_name = uniqid() . '.' . $request->users_foto->getClientOriginalExtension();
        $request->users_foto->move(public_path('images/users'), $file_name);
        $request->users_foto = $file_name;
    }

}
//dd($file_name);


?>
