<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import { Head } from '@inertiajs/vue3';
    import PrimaryButton from '@/Components/PrimaryButton.vue';

    defineProps(['title', 'subtitle'])
</script>

<template>
    <Head title="Chirps">
        <meta name="description" content="Chirps description" />
    </Head>
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">{{ title }}</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <form>
                            <textarea name="" class="block w-full rounded-md border-gray-500 bg-white dark:bg-black focus:border-emerald-500 dark:focus:border-emerald-600 focus:ring-emerald-500 dark:focus:ring-emerald-600" placeholder="What's on you mind?"></textarea>
                            <PrimaryButton focusRingClass="focus:ring-emerald-500" class="mt-6">Chirps</PrimaryButton>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>