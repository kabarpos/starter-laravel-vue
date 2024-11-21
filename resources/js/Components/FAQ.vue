`<template>
  <section class="py-20">
    <div class="container mx-auto px-4">
      <!-- Section Header -->
      <div class="text-center mb-16">
        <h2 class="text-4xl font-bold text-[#1F2739] mb-4">Frequently Asked Questions</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">
          Find answers to common questions about our luxury properties and services
        </p>
      </div>

      <!-- FAQ Grid -->
      <div class="max-w-3xl mx-auto">
        <div 
          v-for="(faq, index) in faqs" 
          :key="faq.id"
          class="mb-4"
        >
          <button
            @click="toggleFaq(index)"
            class="w-full flex justify-between items-center p-4 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-200"
            :class="{ 'bg-[#1F2739] text-white': activeFaq === index }"
          >
            <span class="text-left font-semibold">{{ faq.question }}</span>
            <svg
              class="w-5 h-5 transform transition-transform duration-200"
              :class="{ 'rotate-180': activeFaq === index }"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div
            v-show="activeFaq === index"
            class="p-4 bg-gray-50 rounded-b-lg"
          >
            <p class="text-gray-600">{{ faq.answer }}</p>
          </div>
        </div>
      </div>

      <!-- Contact CTA -->
      <div class="text-center mt-12">
        <p class="text-gray-600 mb-4">Still have questions?</p>
        <router-link
          to="/contact"
          class="inline-block bg-[#BA8C33] text-white px-8 py-3 rounded-md hover:bg-[#325897] transition-colors duration-200"
        >
          Contact Us
        </router-link>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'FAQ',
  data() {
    return {
      activeFaq: null,
      faqs: [
        {
          id: 1,
          question: 'What sets EL MIRA apart from other luxury real estate agencies?',
          answer: 'EL MIRA specializes exclusively in high-end properties and offers personalized service with a dedicated team of luxury real estate experts. Our global network and deep market knowledge ensure we can provide the finest properties and best investment opportunities.'
        },
        {
          id: 2,
          question: 'How do you determine the value of luxury properties?',
          answer: 'We use a comprehensive approach that considers location, property features, market trends, comparable sales, and unique attributes. Our experienced team conducts thorough market analysis to ensure accurate and competitive pricing.'
        },
        {
          id: 3,
          question: 'What is the process of buying a luxury property through EL MIRA?',
          answer: 'We offer a seamless buying experience: First, we understand your preferences and requirements, then present carefully curated properties matching your criteria. Our team handles all aspects of the transaction, from viewings to closing, ensuring a smooth process.'
        },
        {
          id: 4,
          question: 'Do you offer virtual tours of properties?',
          answer: 'Yes, we provide high-quality virtual tours, professional photography, and detailed video walkthroughs of our properties. This allows clients to explore homes remotely before scheduling in-person viewings.'
        },
        {
          id: 5,
          question: 'What areas do you serve?',
          answer: 'We specialize in luxury properties in prime locations across major metropolitan areas and exclusive neighborhoods. Our network extends internationally, allowing us to serve clients looking for properties worldwide.'
        }
      ]
    }
  },
  methods: {
    toggleFaq(index) {
      this.activeFaq = this.activeFaq === index ? null : index
    }
  }
}
</script>`
