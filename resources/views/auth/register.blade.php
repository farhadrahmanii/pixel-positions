<x-layout>
    <x-page-heading>Register User</x-page-heading>
    <x-forms.form method="post" action="/register" enctype="multipart/form-data">
        <x-forms.input name="name" label="name" />
        <x-forms.input name="email" label="email" type="email" />
        <x-forms.input name="password" label="Password" type="password" />
        <x-forms.input name="password_confirmation" label="Confirm Password" type="password" />
        <x-forms.divider />

        <x-forms.input name="employer" label="employer" />
        <x-forms.input name="logo" label="Logo" type="file" />
        <x-forms.button>Create Account</x-forms.button>
    </x-forms.form>
</x-layout>