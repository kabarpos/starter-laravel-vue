`<template>
  <section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
      <!-- Section Header -->
      <div class="text-center mb-16">
        <h2 class="text-4xl font-bold text-[#1F2739] mb-4">Contact Us</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">
          Get in touch with our luxury real estate experts for personalized assistance
        </p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        <!-- Contact Form -->
        <div class="bg-white rounded-lg shadow-lg p-8">
          <h3 class="text-2xl font-bold text-[#1F2739] mb-6">Send us a Message</h3>
          <form @submit.prevent="handleSubmit" class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div>
                <label class="block text-gray-700 mb-2">First Name</label>
                <input 
                  v-model="form.firstName"
                  type="text"
                  class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#BA8C33]"
                  required
                >
              </div>
              <div>
                <label class="block text-gray-700 mb-2">Last Name</label>
                <input 
                  v-model="form.lastName"
                  type="text"
                  class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#BA8C33]"
                  required
                >
              </div>
            </div>
            
            <div>
              <label class="block text-gray-700 mb-2">Email</label>
              <input 
                v-model="form.email"
                type="email"
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#BA8C33]"
                required
              >
            </div>

            <div>
              <label class="block text-gray-700 mb-2">Phone</label>
              <input 
                v-model="form.phone"
                type="tel"
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#BA8C33]"
                required
              >
            </div>

            <div>
              <label class="block text-gray-700 mb-2">Interest</label>
              <select 
                v-model="form.interest"
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#BA8C33]"
                required
              >
                <option value="">Select your interest</option>
                <option value="buying">Buying Property</option>
                <option value="selling">Selling Property</option>
                <option value="investing">Investment Opportunities</option>
                <option value="other">Other</option>
              </select>
            </div>

            <div>
              <label class="block text-gray-700 mb-2">Message</label>
              <textarea 
                v-model="form.message"
                rows="4"
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#BA8C33]"
                required
              ></textarea>
            </div>

            <button 
              type="submit"
              class="w-full bg-[#BA8C33] text-white py-3 rounded-md hover:bg-[#325897] transition-colors duration-200"
            >
              Send Message
            </button>
          </form>
        </div>

        <!-- Contact Information -->
        <div class="lg:pl-12">
          <div class="bg-[#1F2739] text-white rounded-lg shadow-lg p-8 mb-8">
            <h3 class="text-2xl font-bold mb-6">Our Office</h3>
            <div class="space-y-4">
              <div class="flex items-start">
                <svg class="w-6 h-6 mr-4 text-[#BA8C33]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <div>
                  <h4 class="font-semibold mb-1">Address</h4>
                  <p class="text-gray-300">123 Luxury Avenue, Suite 500<br>Beverly Hills, CA 90210</p>
                </div>
              </div>
              
              <div class="flex items-start">
                <svg class="w-6 h-6 mr-4 text-[#BA8C33]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                <div>
                  <h4 class="font-semibold mb-1">Phone</h4>
                  <p class="text-gray-300">+1 (310) 555-0123</p>
                </div>
              </div>

              <div class="flex items-start">
                <svg class="w-6 h-6 mr-4 text-[#BA8C33]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                <div>
                  <h4 class="font-semibold mb-1">Email</h4>
                  <p class="text-gray-300">info@elmira.com</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Business Hours -->
          <div class="bg-white rounded-lg shadow-lg p-8">
            <h3 class="text-2xl font-bold text-[#1F2739] mb-6">Business Hours</h3>
            <div class="space-y-3">
              <div class="flex justify-between">
                <span class="text-gray-600">Monday - Friday</span>
                <span class="font-semibold">9:00 AM - 6:00 PM</span>
              </div>
              <div class="flex justify-between">
                <span class="text-gray-600">Saturday</span>
                <span class="font-semibold">10:00 AM - 4:00 PM</span>
              </div>
              <div class="flex justify-between">
                <span class="text-gray-600">Sunday</span>
                <span class="font-semibold">Closed</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'Contact',
  data() {
    return {
      form: {
        firstName: '',
        lastName: '',
        email: '',
        phone: '',
        interest: '',
        message: ''
      }
    }
  },
  methods: {
    async handleSubmit() {
      try {
        // Here you would typically make an API call to your backend
        console.log('Form submitted:', this.form)
        // Reset form after successful submission
        this.form = {
          firstName: '',
          lastName: '',
          email: '',
          phone: '',
          interest: '',
          message: ''
        }
        alert('Thank you for your message. We will contact you soon!')
      } catch (error) {
        console.error('Error submitting form:', error)
        alert('There was an error submitting your message. Please try again.')
      }
    }
  }
}
</script>`
