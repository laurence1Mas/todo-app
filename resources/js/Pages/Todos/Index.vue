<script setup>
import { ref } from 'vue'
import { router } from '@inertiajs/vue3'

defineProps({
    todos: Array
})

const title = ref('')

function addTodo() {
    if (!title.value) return
    router.post('/todos', { title: title.value })
    title.value = ''
}

function deleteTodo(id) {
    router.delete(`/todos/${id}`)
}

function toggleTodo(id) {
    router.patch(`/todos/${id}`)
}
</script>

<template>
  <div class="min-h-screen bg-gray-100 flex items-center justify-center p-4">
    <div class="bg-white rounded-xl shadow-lg w-full max-w-md p-6">
      <h1 class="text-2xl font-bold mb-6 text-center text-gray-800">Ma To Do List</h1>

      <!-- Formulaire -->
      <form @submit.prevent="addTodo" class="flex gap-2 mb-6">
        <input
          v-model="title"
          placeholder="Ajouter une tâche..."
          class="flex-1 border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
        />
        <button
          type="submit"
          class="bg-blue-500 text-white px-4 rounded-lg hover:bg-blue-600 transition"
        >
          Ajouter
        </button>
      </form>

      <!-- Liste des tâches -->
      <ul class="space-y-2">
        <li
          v-for="todo in todos"
          :key="todo.id"
          class="flex justify-between items-center p-3 bg-gray-50 rounded-lg shadow-sm hover:bg-gray-100 transition"
        >
          <span
            @click="toggleTodo(todo.id)"
            :class="{'line-through text-gray-400': todo.completed}"
            class="cursor-pointer flex-1"
          >
            {{ todo.title }}
          </span>
          <button
            @click="deleteTodo(todo.id)"
            class="text-red-500 hover:text-red-600 transition"
          >
            ❌
          </button>
        </li>
      </ul>
    </div>
  </div>
</template>
