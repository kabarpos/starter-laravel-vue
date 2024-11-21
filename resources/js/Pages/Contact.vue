<template>
  <AppLayout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
      <h1 class="text-3xl font-bold text-gray-900 mb-8">Hubungi Kami</h1>
      
      <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
        <!-- Contact Info -->
        <div>
          <div class="prose prose-blue max-w-none mb-8">
            <p class="text-lg text-gray-600">
              Kami siap membantu Anda menemukan properti impian. Hubungi kami melalui
              salah satu kontak di bawah ini atau isi form yang tersedia.
            </p>
          </div>
          
          <div class="space-y-6">
            <div class="flex items-start">
              <MapPinIcon class="w-6 h-6 text-blue-600 mt-1" />
              <div class="ml-4">
                <h3 class="text-lg font-medium text-gray-900">Alamat</h3>
                <p class="mt-1 text-gray-600">
                  Jl. Raya Serpong No. 8B<br />
                  Tangerang Selatan, Banten
                </p>
              </div>
            </div>
            
            <div class="flex items-center">
              <PhoneIcon class="w-6 h-6 text-blue-600" />
              <div class="ml-4">
                <h3 class="text-lg font-medium text-gray-900">Telepon</h3>
                <p class="mt-1 text-gray-600">+62 812-3456-7890</p>
              </div>
            </div>
            
            <div class="flex items-center">
              <EnvelopeIcon class="w-6 h-6 text-blue-600" />
              <div class="ml-4">
                <h3 class="text-lg font-medium text-gray-900">Email</h3>
                <p class="mt-1 text-gray-600">info@elmira.com</p>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Contact Form -->
        <form @submit.prevent="submitForm" class="space-y-6">
          <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
            <input type="text" id="name" v-model="form.name"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" />
          </div>
          
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" id="email" v-model="form.email"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" />
          </div>
          
          <div>
            <label for="phone" class="block text-sm font-medium text-gray-700">Telepon</label>
            <input type="tel" id="phone" v-model="form.phone"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" />
          </div>
          
          <div>
            <label for="message" class="block text-sm font-medium text-gray-700">Pesan</label>
            <textarea id="message" v-model="form.message" rows="4"
                     class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
          </div>
          
          <button type="submit"
                  class="inline-flex justify-center rounded-md border border-transparent bg-blue-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
            Kirim Pesan
          </button>
        </form>
      </div>
    </div>
  </AppLayout>
</template>

<script setup>
import { ref } from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue'
import { MapPinIcon, PhoneIcon, EnvelopeIcon } from '@heroicons/vue/24/outline'

const form = ref({
  name: '',
  email: '',
  phone: '',
  message: ''
})

const submitForm = () => {
  // Implementasi pengiriman form ke backend
  console.log('Form submitted:', form.value)
}
</script>
