<template>
  <div class="group bg-white rounded-xl shadow-sm hover:shadow-lg transition-shadow overflow-hidden">
    <!-- Property Image -->
    <div class="relative aspect-[4/3] overflow-hidden">
      <img :src="property.mainImage" :alt="property.name" 
           class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
      <div class="absolute top-4 right-4">
        <span class="px-3 py-1 bg-blue-600 text-white text-sm font-semibold rounded-full">
          {{ property.type }}
        </span>
      </div>
    </div>
    
    <!-- Property Info -->
    <div class="p-6">
      <h3 class="text-xl font-bold text-gray-900 mb-2">{{ property.name }}</h3>
      <p class="text-gray-600 mb-4 flex items-center gap-2">
        <MapPinIcon class="w-5 h-5" />
        {{ property.location }}
      </p>
      
      <!-- Property Features -->
      <div class="grid grid-cols-2 gap-4 mb-6 text-sm">
        <div class="flex items-center gap-2">
          <HomeIcon class="w-5 h-5 text-gray-400" />
          <span>{{ property.landSize }} m²</span>
        </div>
        <div class="flex items-center gap-2">
          <Square2StackIcon class="w-5 h-5 text-gray-400" />
          <span>{{ property.buildingSize }} m²</span>
        </div>
        <div class="flex items-center gap-2">
          <UserGroupIcon class="w-5 h-5 text-gray-400" />
          <span>{{ property.bedrooms }} Kamar</span>
        </div>
        <div class="flex items-center gap-2">
          <HomeModernIcon class="w-5 h-5 text-gray-400" />
          <span>{{ property.bathrooms }} K.Mandi</span>
        </div>
      </div>
      
      <!-- Price and Action -->
      <div class="flex items-center justify-between">
        <div class="text-blue-600 font-bold text-xl">
          Rp {{ formatPrice(property.price) }}
        </div>
        <Link :href="route('property.show', { id: property.id })"
              class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
          Detail
        </Link>
      </div>
    </div>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { useRoute } from '@/composables/useRoute'
import { 
  MapPinIcon, 
  HomeIcon, 
  Square2StackIcon,
  UserGroupIcon,
  HomeModernIcon
} from '@heroicons/vue/24/outline'

const route = useRoute()

const props = defineProps({
  property: {
    type: Object,
    required: true
  }
})

const formatPrice = (price) => {
  return new Intl.NumberFormat('id-ID').format(price)
}
</script>
