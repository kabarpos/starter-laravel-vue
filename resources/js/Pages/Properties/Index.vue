<script setup>
import { ref, watch } from 'vue';
import { Head, Link, router } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import { MagnifyingGlassIcon, MapPinIcon, CurrencyDollarIcon } from '@heroicons/vue/24/outline';

const props = defineProps({
    properties: {
        type: Object,
        required: true
    },
    filters: {
        type: Object,
        default: () => ({
            search: '',
            type: '',
            minPrice: '',
            maxPrice: '',
            bedrooms: '',
            bathrooms: ''
        })
    }
});

const filters = ref({ ...props.filters });
const propertyTypes = ['House', 'Apartment', 'Villa', 'Land', 'Commercial'];

watch(filters, (newFilters) => {
    router.get('/properties', newFilters, {
        preserveState: true,
        preserveScroll: true,
        replace: true
    });
}, { deep: true });

const formatPrice = (price) => {
    return new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 0,
        maximumFractionDigits: 0
    }).format(price);
};
</script>

<template>
    <AppLayout>
        <Head>
            <title>Properties - ELMIRA Luxury Real Estate</title>
        </Head>

        <!-- Hero Section with Elegant Design -->
        <div class="relative h-[50vh] bg-primary overflow-hidden">
            <div class="absolute inset-0">
                <img 
                    src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?ixlib=rb-4.0.1&auto=format&fit=crop&w=2075&q=80" 
                    alt="Luxury Properties"
                    class="w-full h-full object-cover filter brightness-50"
                >
                <div class="absolute inset-0 bg-gradient-to-r from-primary/90 to-primary/50"></div>
            </div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center">
                <div class="max-w-3xl">
                    <h1 class="font-heading text-5xl md:text-6xl text-white font-bold mb-6 leading-tight">
                        Discover Your Dream Property
                    </h1>
                    <p class="font-sans text-xl text-gray-200 leading-relaxed max-w-2xl">
                        Explore our curated collection of exclusive properties, where luxury meets lifestyle in Indonesia's most prestigious locations.
                    </p>
                </div>
            </div>
        </div>

        <!-- Refined Search and Filter Section -->
        <div class="bg-white shadow-xl relative -mt-16 max-w-6xl mx-auto rounded-2xl p-8 mb-16">
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
                <!-- Search Input -->
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700 mb-2 font-sans">Search Location</label>
                    <div class="relative">
                        <input 
                            v-model="filters.search"
                            type="text" 
                            placeholder="Enter location..."
                            class="w-full pl-11 pr-4 py-3.5 rounded-xl border border-gray-200 focus:ring-2 focus:ring-accent/50 focus:border-accent transition-colors duration-200 font-sans text-gray-700"
                        >
                        <MagnifyingGlassIcon class="h-5 w-5 text-gray-400 absolute left-4 top-4" />
                    </div>
                </div>

                <!-- Property Type Select -->
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700 mb-2 font-sans">Property Type</label>
                    <select 
                        v-model="filters.type"
                        class="w-full px-4 py-3.5 rounded-xl border border-gray-200 focus:ring-2 focus:ring-accent/50 focus:border-accent transition-colors duration-200 font-sans text-gray-700 appearance-none bg-white"
                    >
                        <option value="">All Types</option>
                        <option v-for="type in propertyTypes" :key="type" :value="type">
                            {{ type }}
                        </option>
                    </select>
                </div>

                <!-- Price Range -->
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700 mb-2 font-sans">Price Range (IDR)</label>
                    <div class="grid grid-cols-2 gap-3">
                        <input 
                            v-model="filters.minPrice"
                            type="number" 
                            placeholder="Min"
                            class="w-full px-4 py-3.5 rounded-xl border border-gray-200 focus:ring-2 focus:ring-accent/50 focus:border-accent transition-colors duration-200 font-sans text-gray-700"
                        >
                        <input 
                            v-model="filters.maxPrice"
                            type="number" 
                            placeholder="Max"
                            class="w-full px-4 py-3.5 rounded-xl border border-gray-200 focus:ring-2 focus:ring-accent/50 focus:border-accent transition-colors duration-200 font-sans text-gray-700"
                        >
                    </div>
                </div>

                <!-- Bedrooms Select -->
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700 mb-2 font-sans">Bedrooms</label>
                    <select 
                        v-model="filters.bedrooms"
                        class="w-full px-4 py-3.5 rounded-xl border border-gray-200 focus:ring-2 focus:ring-accent/50 focus:border-accent transition-colors duration-200 font-sans text-gray-700 appearance-none bg-white"
                    >
                        <option value="">Any</option>
                        <option v-for="n in 6" :key="n" :value="n">{{ n }}+ Bedrooms</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Elegant Properties Grid -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-24">
            <!-- Section Title -->
            <div class="text-center mb-12">
                <h2 class="font-heading text-3xl font-bold text-primary mb-4">Featured Properties</h2>
                <p class="text-gray-600 font-sans max-w-2xl mx-auto">
                    Discover our handpicked selection of premium properties, each offering unique luxury and sophistication.
                </p>
            </div>

            <!-- Properties Grid -->
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <div v-for="property in properties.data" :key="property.id" 
                     class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-1">
                    <Link :href="`/properties/${property.id}`" class="block h-full">
                        <!-- Property Image -->
                        <div class="relative h-[300px] overflow-hidden">
                            <img 
                                :src="property.main_image" 
                                :alt="property.name"
                                class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700"
                            >
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                            
                            <!-- Price Tag -->
                            <div class="absolute bottom-4 left-4 right-4 flex justify-between items-center">
                                <span class="px-4 py-2 bg-accent/90 backdrop-blur-sm text-primary font-accent text-sm font-semibold rounded-lg">
                                    {{ formatPrice(property.price) }}
                                </span>
                                <span class="px-3 py-1.5 bg-white/90 backdrop-blur-sm text-primary font-sans text-sm font-medium rounded-lg">
                                    {{ property.type }}
                                </span>
                            </div>
                        </div>

                        <!-- Property Details -->
                        <div class="p-6 flex flex-col justify-between h-[calc(100%-300px)]">
                            <div>
                                <h3 class="font-heading text-xl font-bold text-primary mb-2 group-hover:text-accent transition-colors duration-300 line-clamp-1">
                                    {{ property.name }}
                                </h3>
                                <p class="flex items-center text-gray-600 mb-4 font-sans line-clamp-1">
                                    <MapPinIcon class="h-5 w-5 text-accent mr-2 flex-shrink-0" />
                                    {{ property.location }}
                                </p>
                            </div>

                            <!-- Property Features -->
                            <div class="grid grid-cols-3 gap-4 py-4 border-t border-gray-100 mt-auto">
                                <div class="text-center">
                                    <span class="block text-gray-400 text-sm font-sans mb-1">Bedrooms</span>
                                    <span class="text-primary font-accent font-semibold">{{ property.bedrooms }}</span>
                                </div>
                                <div class="text-center">
                                    <span class="block text-gray-400 text-sm font-sans mb-1">Bathrooms</span>
                                    <span class="text-primary font-accent font-semibold">{{ property.bathrooms }}</span>
                                </div>
                                <div class="text-center">
                                    <span class="block text-gray-400 text-sm font-sans mb-1">Size</span>
                                    <span class="text-primary font-accent font-semibold">{{ property.building_size }}m²</span>
                                </div>
                            </div>
                        </div>
                    </Link>
                </div>
            </div>

            <!-- Refined Pagination -->
            <div class="mt-16" v-if="properties.links && properties.links.length > 3">
                <div class="flex justify-center gap-2">
                    <Link 
                        v-for="link in properties.links" 
                        :key="link.label"
                        :href="link.url"
                        class="px-4 py-2 rounded-xl text-sm font-sans transition-all duration-200"
                        :class="{
                            'bg-accent text-primary font-semibold shadow-lg shadow-accent/20': link.active,
                            'bg-gray-100 text-gray-600 hover:bg-gray-200': !link.active,
                            'opacity-50 cursor-not-allowed': !link.url
                        }"
                        v-html="link.label"
                    />
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<style scoped>
/* Custom Scrollbar for Inputs */
input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

select {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
    background-position: right 0.5rem center;
    background-repeat: no-repeat;
    background-size: 1.5em 1.5em;
}
</style>
