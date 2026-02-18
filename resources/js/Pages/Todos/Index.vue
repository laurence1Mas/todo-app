<script setup>
import { ref } from 'vue'
import { router } from '@inertiajs/vue3'

defineProps({
    todos: Array
})

const title = ref('')

function addTodo() {
    router.post('/todos', {
        title: title.value
    })

    title.value = ''
}

function deleteTodo(id) {
    router.delete(`/todos/${id}`)
}
</script>

<template>
    <div style="max-width: 600px; margin: auto; padding: 20px;">
        <h1>📝 To Do List</h1>

        <form @submit.prevent="addTodo">
            <input v-model="title" placeholder="Nouvelle tâche..." />
            <button type="submit">Ajouter</button>
        </form>

        <ul>
            <li v-for="todo in todos" :key="todo.id">
                {{ todo.title }}
                <button @click="deleteTodo(todo.id)">❌</button>
            </li>
        </ul>
    </div>
</template>
