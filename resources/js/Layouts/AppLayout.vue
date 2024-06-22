<script setup>
import Banner from '@/Components/Banner.vue';
import Header from '@/Components/Header.vue';
import MainNavigation from "@/Components/MainNavigation.vue";

import { Head } from '@inertiajs/vue3';


defineProps({
    title: String,
});
</script>

<template>
    <div>
        <Head :title="title" />
        <Banner />
        <Header />
        <MainNavigation />

        <div class="min-h-screen">
            <!-- Page Heading -->
            <header v-if="$slots.header" class="bg-gray-50 dark:bg-gray-700 relative">
                <div class="w-full">
                    <slot name="header" />
                </div>
            </header>

            <div v-if="$slots.side" class="max-w-7xl py-4 mx-auto flex flex-wrap px-4 sm:px-0">
                <main class="w-full md:w-3/4 flex flex-col px-3">
                    <slot />
                </main>
                <aside class="w-full md:w-1/4 flex flex-col px-3">
                    <slot name="side" />
                </aside>
            </div>

            <div v-else class="max-w-7xl py-4 mx-auto px-4 sm:px-0">
                <slot />
            </div>
        </div>
    </div>
</template>
