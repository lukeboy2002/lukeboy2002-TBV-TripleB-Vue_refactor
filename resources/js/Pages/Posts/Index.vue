<template>
    <AppLayout title="Blog">
        <template #header>
            <img src="/assets/blog.jpg" class="h-40 md:h-56 overflow-hidden lg:h-72 w-full object-cover" />
        </template>

        <div class="px-4 sm:px-0">
            <Article v-for="post in posts.data" :key="post.id" class="mb-4 last-of-type:mb-0">
                <div class="flex justify-between items-center mb-5 text-gray-500">
                    <span class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                        <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path></svg>
                          Tutorial
                    </span>
    <!--                <span class="text-sm">{{ formattedDate(post) }} ago</span>-->
                </div>
    <!--            <Link :href="post.routes.show" class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:text-orange-500 dark:hover:text-orange-500 focus:outline-none focus:text-orange-500 dark:focus:text-orange-500 transition duration-150 ease-in-out">-->
    <!--                {{ post.title }}-->
    <!--            </Link>            -->
                <div class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:text-orange-500 dark:hover:text-orange-500 focus:outline-none focus:text-orange-500 dark:focus:text-orange-500 transition duration-150 ease-in-out">
                    {{ post.title }}
                </div>
                <p class="mb-5 font-light text-gray-500 dark:text-gray-400 whitespace-pre-wrap">
                    {{ post.body}}
                </p>
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-4">
                        <img :src="post.user.profile_photo_url" class="w-7 h-7 rounded-full" />
                        <span class="font-medium dark:text-white">{{ post.user.username }}</span>
                    </div>
    <!--                <DefaultLink :href="post.routes.show">-->
                    <div class="flex items-center space-2 text-gray-700 dark:text-gray-50">
                        Read More
                        <ArrowRightCircleIcon class="ml-2 size-5"/>
    <!--                </DefaultLink>-->
                    </div>
                </div>
            </article>

            <div>
                <Paginate :meta="posts.meta" :only="['posts']" />
            </div>
        </div>

    </AppLayout>
</template>
<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Article from "@/Components/Article.vue";
import Paginate from "@/Components/Paginate.vue";
import {ArrowRightCircleIcon} from "@heroicons/vue/20/solid/index.js";

import {Link} from "@inertiajs/vue3";

defineProps(['posts']);

</script>
