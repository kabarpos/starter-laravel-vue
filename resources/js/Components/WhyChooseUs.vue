`<template>
  <section class="py-20 bg-[#1F2739]">
    <div class="container mx-auto px-4">
      <!-- Section Header -->
      <div class="text-center mb-16">
        <h2 class="text-4xl font-bold text-white mb-4">Why Choose EL MIRA</h2>
        <p class="text-gray-300 max-w-2xl mx-auto">
          We are committed to providing exceptional service and unparalleled expertise in luxury real estate
        </p>
      </div>

      <!-- Features Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <div 
          v-for="feature in features" 
          :key="feature.id"
          class="text-center p-6 bg-white/5 rounded-lg backdrop-blur-sm hover:bg-white/10 transition-colors duration-300"
        >
          <div class="w-16 h-16 mx-auto mb-6 text-[#BA8C33]">
            <component :is="feature.icon" class="w-full h-full" />
          </div>
          <h3 class="text-xl font-bold text-white mb-4">{{ feature.title }}</h3>
          <p class="text-gray-300">{{ feature.description }}</p>
        </div>
      </div>

      <!-- Stats Section -->
      <div class="mt-20 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <div 
          v-for="stat in stats" 
          :key="stat.id"
          class="text-center"
        >
          <div class="text-4xl font-bold text-[#BA8C33] mb-2">{{ stat.value }}</div>
          <div class="text-white">{{ stat.label }}</div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'WhyChooseUs',
  data() {
    return {
      features: [
        {
          id: 1,
          title: 'Luxury Expertise',
          description: 'Specialized knowledge in high-end real estate market with years of experience',
          icon: 'StarIcon'
        },
        {
          id: 2,
          title: 'Exclusive Listings',
          description: 'Access to the most prestigious and exclusive properties in prime locations',
          icon: 'HomeIcon'
        },
        {
          id: 3,
          title: 'Personalized Service',
          description: 'Tailored approach to meet your specific needs and preferences',
          icon: 'UserGroupIcon'
        },
        {
          id: 4,
          title: 'Global Network',
          description: 'Connected with international luxury real estate networks and buyers',
          icon: 'GlobeIcon'
        }
      ],
      stats: [
        {
          id: 1,
          value: '500+',
          label: 'Properties Sold'
        },
        {
          id: 2,
          value: '98%',
          label: 'Client Satisfaction'
        },
        {
          id: 3,
          value: '15+',
          label: 'Years Experience'
        },
        {
          id: 4,
          value: '$2B+',
          label: 'Property Value Sold'
        }
      ]
    }
  },
  components: {
    StarIcon: {
      template: '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" /></svg>'
    },
    HomeIcon: {
      template: '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>'
    },
    UserGroupIcon: {
      template: '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>'
    },
    GlobeIcon: {
      template: '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>'
    }
  }
}
</script>`
