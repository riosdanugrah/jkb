<script setup>
import { Splide, SplideSlide } from "@splidejs/vue-splide";
import { usePage } from "@inertiajs/vue3";
const banner_global = usePage().props.banner_global;
</script>

<template>
    <section class="bg-white dark:bg-gray-900">
        <div
            class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12"
        >
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white"
                >
                    Flavors from Around the World
                </h1>
                <a
                    :href="route('product.index')"
                    :class="
                        route().current('home')
                            ? 'md:text-white-700 md:dark:text-white-500'
                            : 'md:text-gray-800 md:dark:text-gray-100'
                    "
                    class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900"
                >
                    Shop Now
                    <svg
                        class="w-5 h-5 ml-2 -mr-1"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex rounded-lg w-full">
                <Splide
                    :options="{
                        type: 'loop',
                        gap: '1rem',
                        autoplay: true,
                        arrows: false,
                    }"
                    aria-label="My Favorite Images"
                >
                    <SplideSlide v-for="item in banner_global">
                        <img
                            :src="item.image"
                            class="rounded-lg"
                            :aria-label="item.name"
                        />
                    </SplideSlide>
                </Splide>
            </div>
        </div>
    </section>
</template>
