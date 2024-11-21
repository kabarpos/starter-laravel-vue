<template>
  <AppLayout>
    <!-- Hero Section -->
    <div class="relative bg-primary">
      <div class="absolute inset-0">
        <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" alt="Luxury Home">
        <div class="absolute inset-0 bg-primary/70"></div>
      </div>
      
      <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">
          Temukan Hunian Impian Anda
        </h1>
        <p class="mt-6 text-xl text-gray-300 max-w-3xl">
          EL MIRA menyediakan properti premium dengan lokasi strategis dan fasilitas terbaik.
          Jadikan impian memiliki hunian mewah Anda menjadi kenyataan.
        </p>
        <div class="mt-10">
          <Link :href="route('property.index')" 
                class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-primary bg-accent hover:bg-accent/90">
            Lihat Properti
          </Link>
        </div>
      </div>
    </div>

    <!-- Featured Properties Section -->
    <div class="bg-primary/5 py-16 sm:py-24">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
          <h2 class="text-3xl font-extrabold text-primary sm:text-4xl">
            Properti Unggulan
          </h2>
          <p class="mt-4 text-lg text-gray-500">
            Temukan properti mewah terbaik yang kami tawarkan
          </p>
        </div>

        <div class="mt-12 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
          <div v-for="property in featuredProperties" :key="property.id" 
               class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="relative h-48">
              <img :src="property.image" :alt="property.title" 
                   class="w-full h-full object-cover">
            </div>
            <div class="p-6">
              <h3 class="text-xl font-semibold text-primary">
                {{ property.title }}
              </h3>
              <p class="mt-2 text-gray-500 flex items-center">
                <MapPinIcon class="h-5 w-5 text-accent mr-2" />
                {{ property.location }}
              </p>
              <div class="mt-4 flex items-center justify-between">
                <p class="text-xl font-bold text-accent">
                  {{ formatPrice(property.price) }}
                </p>
                <Link :href="route('property.show', property.id)"
                      class="text-primary hover:text-accent">
                  Detail
                </Link>
              </div>
              <div class="mt-4 flex items-center justify-between text-sm text-gray-500">
                <span>{{ property.bedrooms }} Kamar</span>
                <span>{{ property.bathrooms }} K. Mandi</span>
                <span>{{ property.size }} m²</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Why Choose Us Section -->
    <div class="bg-primary text-white py-16 sm:py-24">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
          <h2 class="text-3xl font-extrabold sm:text-4xl text-accent">
            Mengapa Memilih EL MIRA?
          </h2>
          <p class="mt-4 text-lg text-gray-300">
            Kami menawarkan properti terbaik dengan standar kualitas tinggi
          </p>
        </div>

        <div class="mt-12 grid gap-8 md:grid-cols-2 lg:grid-cols-4">
          <div v-for="feature in features" :key="feature.id" 
               class="text-center">
            <div class="flex items-center justify-center">
              <component :is="feature.icon" 
                        class="h-12 w-12 text-accent" />
            </div>
            <h3 class="mt-4 text-xl font-semibold text-white">
              {{ feature.title }}
            </h3>
            <p class="mt-2 text-gray-300">
              {{ feature.description }}
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Contact Section -->
    <div class="bg-primary/5 py-16 sm:py-24">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
          <h2 class="text-3xl font-extrabold text-primary sm:text-4xl">
            Hubungi Kami
          </h2>
          <p class="mt-4 text-lg text-gray-500">
            Konsultasikan kebutuhan properti Anda dengan tim kami
          </p>
        </div>

        <div class="mt-12 grid gap-8 md:grid-cols-2">
          <div class="bg-white rounded-lg shadow-lg p-8">
            <h3 class="text-xl font-semibold text-primary mb-4">
              Informasi Kontak
            </h3>
            <div class="space-y-4">
              <div class="flex items-center">
                <PhoneIcon class="h-6 w-6 text-accent mr-3" />
                <span class="text-gray-600">+62 812-3456-7890</span>
              </div>
              <div class="flex items-center">
                <EnvelopeIcon class="h-6 w-6 text-accent mr-3" />
                <span class="text-gray-600">info@elmira.com</span>
              </div>
              <div class="flex items-center">
                <MapPinIcon class="h-6 w-6 text-accent mr-3" />
                <span class="text-gray-600">Jl. Sudirman No. 123, Jakarta Selatan</span>
              </div>
            </div>
          </div>

          <div class="bg-white rounded-lg shadow-lg p-8">
            <h3 class="text-xl font-semibold text-primary mb-4">
              Kirim Pesan
            </h3>
            <form class="space-y-4">
              <div>
                <label class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-accent focus:ring-accent">
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-accent focus:ring-accent">
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700">Pesan</label>
                <textarea rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-accent focus:ring-accent"></textarea>
              </div>
              <button type="submit" class="w-full bg-accent text-primary px-4 py-2 rounded-md hover:bg-accent/90">
                Kirim Pesan
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import { Link } from '@inertiajs/vue3'
import { route } from 'ziggy-js'
import { 
  MapPinIcon, 
  HomeIcon, 
  Square2StackIcon,
  BuildingOfficeIcon,
  PhoneIcon,
  EnvelopeIcon 
} from '@heroicons/vue/24/outline'

// Dummy data - will be replaced with props from Laravel backend
const featuredProperties = [
  {
    id: 1,
    title: 'Modern Villa with Pool',
    location: 'Jakarta Selatan',
    price: 5000000000,
    bedrooms: 5,
    bathrooms: 4,
    size: 500,
    image: 'https://images.unsplash.com/photo-1613977257363-707ba9348227?ixlib=rb-4.0.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80'
  },
  {
    id: 2,
    title: 'Luxury Apartment',
    location: 'Jakarta Pusat',
    price: 3500000000,
    bedrooms: 3,
    bathrooms: 2,
    size: 200,
    image: 'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?ixlib=rb-4.0.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2075&q=80'
  },
  {
    id: 3,
    title: 'Beachfront Villa',
    location: 'Bali',
    price: 8000000000,
    bedrooms: 6,
    bathrooms: 5,
    size: 600,
    image: 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?ixlib=rb-4.0.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2053&q=80'
  }
]

const features = [
  {
    id: 1,
    title: 'Lokasi Premium',
    description: 'Properti kami terletak di lokasi strategis dengan akses mudah ke berbagai fasilitas.',
    icon: MapPinIcon
  },
  {
    id: 2,
    title: 'Desain Modern',
    description: 'Setiap properti dirancang dengan konsep modern dan memperhatikan detail.',
    icon: HomeIcon
  },
  {
    id: 3,
    title: 'Luas & Nyaman',
    description: 'Ruang yang luas dan nyaman untuk kenyamanan keluarga Anda.',
    icon: Square2StackIcon
  },
  {
    id: 4,
    title: 'Fasilitas Lengkap',
    description: 'Dilengkapi dengan berbagai fasilitas modern untuk gaya hidup mewah.',
    icon: BuildingOfficeIcon
  }
]

const formatPrice = (price) => {
  return new Intl.NumberFormat('id-ID', {
    style: 'currency',
    currency: 'IDR',
    minimumFractionDigits: 0,
    maximumFractionDigits: 0
  }).format(price)
}
</script>
