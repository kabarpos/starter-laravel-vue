<script setup>
import { ref } from 'vue';
import { Head, useForm } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import { 
    HomeIcon, 
    BedDoubleIcon, 
    ShowerIcon, 
    SquareIcon,
    MapPinIcon,
    PhoneIcon,
    EnvelopeIcon 
} from '@heroicons/vue/24/outline';

const props = defineProps({
    property: {
        type: Object,
        required: true
    }
});

const form = useForm({
    name: '',
    email: '',
    phone: '',
    message: '',
    property_id: props.property.id
});

const submitForm = () => {
    form.post(route('properties.contact'), {
        preserveScroll: true,
        onSuccess: () => form.reset()
    });
};

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
            <title>{{ property.name }} - ELMIRA Luxury Real Estate</title>
        </Head>

        <!-- Property Images -->
        <div class="relative h-[60vh] bg-primary overflow-hidden">
            <img 
                :src="property.main_image" 
                :alt="property.name"
                class="w-full h-full object-cover"
            >
        </div>

        <!-- Property Details -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Main Content -->
                <div class="lg:col-span-2">
                    <div class="mb-8">
                        <h1 class="font-heading text-4xl font-bold text-primary mb-4">
                            {{ property.name }}
                        </h1>
                        <div class="flex items-center text-gray-600 mb-4">
                            <MapPinIcon class="h-5 w-5 text-accent mr-2" />
                            <span class="font-sans">{{ property.location }}</span>
                        </div>
                        <div class="text-2xl font-accent text-accent font-semibold">
                            {{ formatPrice(property.price) }}
                        </div>
                    </div>

                    <!-- Property Features -->
                    <div class="grid grid-cols-4 gap-6 mb-12">
                        <div class="text-center p-4 bg-gray-50 rounded-lg">
                            <HomeIcon class="h-8 w-8 text-accent mx-auto mb-2" />
                            <span class="block text-gray-600 text-sm font-sans">Type</span>
                            <span class="font-accent font-semibold">{{ property.type }}</span>
                        </div>
                        <div class="text-center p-4 bg-gray-50 rounded-lg">
                            <BedDoubleIcon class="h-8 w-8 text-accent mx-auto mb-2" />
                            <span class="block text-gray-600 text-sm font-sans">Bedrooms</span>
                            <span class="font-accent font-semibold">{{ property.bedrooms }}</span>
                        </div>
                        <div class="text-center p-4 bg-gray-50 rounded-lg">
                            <ShowerIcon class="h-8 w-8 text-accent mx-auto mb-2" />
                            <span class="block text-gray-600 text-sm font-sans">Bathrooms</span>
                            <span class="font-accent font-semibold">{{ property.bathrooms }}</span>
                        </div>
                        <div class="text-center p-4 bg-gray-50 rounded-lg">
                            <SquareIcon class="h-8 w-8 text-accent mx-auto mb-2" />
                            <span class="block text-gray-600 text-sm font-sans">Building Size</span>
                            <span class="font-accent font-semibold">{{ property.building_size }}m²</span>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="mb-12">
                        <h2 class="font-heading text-2xl font-bold text-primary mb-4">
                            Description
                        </h2>
                        <div class="prose font-sans text-gray-600">
                            {{ property.description }}
                        </div>
                    </div>

                    <!-- Facilities -->
                    <div class="mb-12">
                        <h2 class="font-heading text-2xl font-bold text-primary mb-4">
                            Facilities
                        </h2>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                            <div 
                                v-for="facility in property.facilities" 
                                :key="facility"
                                class="flex items-center space-x-2 text-gray-600"
                            >
                                <CheckCircleIcon class="h-5 w-5 text-accent" />
                                <span class="font-sans">{{ facility }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="lg:col-span-1">
                    <div class="bg-white rounded-xl shadow-lg p-6 sticky top-8">
                        <h3 class="font-heading text-xl font-bold text-primary mb-6">
                            Interested in this property?
                        </h3>
                        <form @submit.prevent="submitForm" class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2 font-sans">Name</label>
                                <input 
                                    v-model="form.name"
                                    type="text" 
                                    class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-accent focus:border-transparent font-sans"
                                    :class="{ 'border-red-500': form.errors.name }"
                                >
                                <p v-if="form.errors.name" class="mt-1 text-sm text-red-500">{{ form.errors.name }}</p>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2 font-sans">Email</label>
                                <input 
                                    v-model="form.email"
                                    type="email" 
                                    class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-accent focus:border-transparent font-sans"
                                    :class="{ 'border-red-500': form.errors.email }"
                                >
                                <p v-if="form.errors.email" class="mt-1 text-sm text-red-500">{{ form.errors.email }}</p>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2 font-sans">Phone</label>
                                <input 
                                    v-model="form.phone"
                                    type="tel" 
                                    class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-accent focus:border-transparent font-sans"
                                    :class="{ 'border-red-500': form.errors.phone }"
                                >
                                <p v-if="form.errors.phone" class="mt-1 text-sm text-red-500">{{ form.errors.phone }}</p>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2 font-sans">Message</label>
                                <textarea 
                                    v-model="form.message"
                                    rows="4" 
                                    class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-accent focus:border-transparent font-sans"
                                    :class="{ 'border-red-500': form.errors.message }"
                                ></textarea>
                                <p v-if="form.errors.message" class="mt-1 text-sm text-red-500">{{ form.errors.message }}</p>
                            </div>
                            <button 
                                type="submit" 
                                class="w-full py-4 bg-accent text-primary font-sans font-semibold rounded-lg hover:bg-accent/90 transition-all transform hover:scale-105"
                                :disabled="form.processing"
                            >
                                <span v-if="form.processing">Sending...</span>
                                <span v-else>Send Inquiry</span>
                            </button>
                        </form>

                        <!-- Contact Information -->
                        <div class="mt-8 pt-8 border-t border-gray-200">
                            <h4 class="font-heading text-lg font-bold text-primary mb-4">
                                Contact Information
                            </h4>
                            <div class="space-y-4">
                                <div class="flex items-center">
                                    <PhoneIcon class="h-5 w-5 text-accent mr-3" />
                                    <span class="font-sans text-gray-600">+62 812-3456-7890</span>
                                </div>
                                <div class="flex items-center">
                                    <EnvelopeIcon class="h-5 w-5 text-accent mr-3" />
                                    <span class="font-sans text-gray-600">info@elmira.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
