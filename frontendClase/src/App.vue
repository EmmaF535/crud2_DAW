<script setup>
  import { ref } from 'vue';
  import axios from 'axios';

  const notas_por_id = ref('');
  const todas_las_notas = ref([]);
  
function getNotes(noteId){
  axios.get("http://localhost:8000/api/v1/notes/" + noteId)
    .then(response => {
      todas_las_notas.value = response.data;
    })
}
</script>

<template>
<div class="container py-4">
  <div class="row mb-3">
    <div class="col">
      <header class="bg-info py-3 text-white text-center">
        <h1 class="mb-0">Notes</h1>
      </header>
    </div>
  </div>
  <div class="row justify-content-center mb-4">
    <div class="col-12 col-md-9 col-lg-6">
      <div class="mb-3">
        <label for="" class="form-label">Id *</label>
        <input type="number" class="form-control" v-model="noteId">
      </div>
      <div class="mb-3 text-end">
        <button class="btn btn-info" @click="getNotes(noteId)">Search</button>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <table class="table">
        <thead>
          <tr>
            <th>Id</th>
            <th>Value</th>
            <th>Content</th>
          </tr>
        </thead>
        <tbody v-if="allNotes.length > 1">
          <tr v-for="note in allNotes" :key="note.id">
            <td>{{ note.id }}</td>
            <td>{{ note.title }}</td>
            <td>{{ note.content }}</td>
          </tr>
        </tbody>
        <tbody v-else>
          <tr>
            <td>{{ allNotes.id }}</td>
            <td>{{ allNotes.title }}</td>
            <td>{{ allNotes.content }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
</template>

<style scoped>
</style>
