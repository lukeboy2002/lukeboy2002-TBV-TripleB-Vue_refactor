<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    active: Boolean,
    href: String,
    as: String,
});

const classes = computed(() => {
    return props.active
        ? 'block w-full ps-3 pe-4 py-2 border-l-4 border-orange-500 text-start text-base font-medium text-orange-500 bg-orange-50 focus:outline-none focus:text-orange-600 focus:bg-orange-100 focus:border-orange-600 transition duration-150 ease-in-out'
        : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-gray-700 dark:text-white hover:text-gray-800 dark:hover:text-gray-800 hover:bg-orange-50 hover:border-orange-500 focus:outline-none focus:text-gray-800 focus:bg-orange-50 focus:border-orange-500 transition duration-150 ease-in-out';
});
</script>

<template>
    <div>
        <button v-if="as == 'button'" :class="classes" class="w-full text-start">
            <slot />
        </button>

        <Link v-else :href="href" :class="classes">
            <slot />
        </Link>
    </div>
</template>
