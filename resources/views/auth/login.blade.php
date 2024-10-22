<x-layout>
    <x-page-heading>Login User</x-page-heading>
    <x-forms.form method="post" action="/login">
        <x-forms.input name="email" label="email" type="email" />
        <x-forms.input name="password" label="Password" type="password" />

        <x-forms.button>Login</x-forms.button>
    </x-forms.form>
</x-layout>
