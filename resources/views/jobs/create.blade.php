<x-layout>
    <x-page-heading>
        Create New
    </x-page-heading>
    <x-forms.form method="POST">
        <x-forms.input name="title" label="Title" placeholder="Senior Developer" required />
        <x-forms.input name="salary" label="salary" placeholder="$90,000" required />
        <x-forms.input name="location" label="location" placeholder="Kabul, Herat... " required />
        <x-forms.select name="schedule" label="schedule" placeholder="Full Time">
            <option>
                Full Time
            </option>
            <option>
                Part Time
            </option>
        </x-forms.select>
        <x-forms.input name="url" label="url" placeholder="https://example.com" required />
        <x-forms.checkbox name="featured" label="featured" />

        <x-forms.divider />

        <x-forms.input name="tags" label="Tags" placeholder="laravel, backend, php" required />

        <x-forms.button>Submit</x-forms.button>
    </x-forms.form>
</x-layout>