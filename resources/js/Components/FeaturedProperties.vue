`<template>
  <section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
      <!-- Section Header -->
      <div class="text-center mb-16">
        <h2 class="text-4xl font-bold text-[#1F2739] mb-4">Featured Properties</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">
          Discover our hand-picked selection of luxury properties that define elegance and sophistication
        </p>
      </div>

      <!-- Properties Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div 
          v-for="property in properties" 
          :key="property.id" 
          class="bg-white rounded-lg shadow-lg overflow-hidden group hover:shadow-xl transition-shadow duration-300"
        >
          <!-- Property Image -->
          <div class="relative h-64 overflow-hidden">
            <img 
              :src="property.image" 
              :alt="property.title"
              class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300"
            />
            <div class="absolute top-4 right-4">
              <span class="bg-[#BA8C33] text-white px-3 py-1 rounded-full text-sm">
                {{ property.status }}
              </span>
            </div>
          </div>

          <!-- Property Details -->
          <div class="p-6">
            <h3 class="text-xl font-bold text-[#1F2739] mb-2">{{ property.title }}</h3>
            <p class="text-gray-600 mb-4">{{ property.location }}</p>
            
            <!-- Features -->
            <div class="flex justify-between mb-4 text-sm text-gray-500">
              <span class="flex items-center">
                <i class="fas fa-bed mr-2"></i>
                {{ property.bedrooms }} Bedrooms
              </span>
              <span class="flex items-center">
                <i class="fas fa-bath mr-2"></i>
                {{ property.bathrooms }} Bathrooms
              </span>
              <span class="flex items-center">
                <i class="fas fa-ruler-combined mr-2"></i>
                {{ property.size }} sqft
              </span>
            </div>

            <!-- Price and CTA -->
            <div class="flex justify-between items-center">
              <div class="text-[#325897] font-bold text-xl">
                ${{ property.price.toLocaleString() }}
              </div>
              <router-link 
                :to="'/property/' + property.id"
                class="bg-[#1F2739] text-white px-4 py-2 rounded-md hover:bg-[#325897] transition-colors duration-200"
              >
                View Details
              </router-link>
            </div>
          </div>
        </div>
      </div>

      <!-- View All Button -->
      <div class="text-center mt-12">
        <router-link 
          to="/properties"
          class="inline-block bg-[#BA8C33] text-white px-8 py-3 rounded-md hover:bg-[#325897] transition-colors duration-200"
        >
          View All Properties
        </router-link>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'FeaturedProperties',
  data() {
    return {
      properties: [
        {
          id: 1,
          title: 'Modern Luxury Villa',
          location: 'Beverly Hills, CA',
          price: 5500000,
          bedrooms: 5,
          bathrooms: 6,
          size: 6500,
          status: 'For Sale',
          image: '/images/property-1.jpg'
        },
        {
          id: 2,
          title: 'Oceanfront Mansion',
          location: 'Malibu, CA',
          price: 8900000,
          bedrooms: 6,
          bathrooms: 7,
          size: 8200,
          status: 'For Sale',
          image: '/images/property-2.jpg'
        },
        {
          id: 3,
          title: 'Contemporary Penthouse',
          location: 'New York, NY',
          price: 4200000,
          bedrooms: 4,
          bathrooms: 4.5,
          size: 4800,
          status: 'Featured',
          image: '/images/property-3.jpg'
        }
      ]
    }
  }
}
</script>`
