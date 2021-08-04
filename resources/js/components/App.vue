<template>
    <div class="app container">
        <div class="spinner-border" role="status" v-if="loading">
          <span class="visually-hidden">Loading...</span>
        </div>
        <div class="row mb-1">
            <div class="col-12" v-for="item in descriptions" v-if="loading == false">
                <card :item="item"></card>
            </div>
        </div>
    </div>
</template>

<script>
import card from './Card.vue';
import axios from 'axios';

export default {
    data() {
        return {
            descriptions: [],
            loading: true
        };
    },
    mounted() {
        let self = this;

        axios.get('/api/v1/descriptions')
            .then(res => {
                console.log(res);
                self.descriptions = res.data
                self.loading = false;
            }).catch(err => {
            console.log(err)
        })
    },
    components: { card }
};
</script>
