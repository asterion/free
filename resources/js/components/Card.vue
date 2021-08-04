<template>
    <div class="card mb-3 bg-dark text-white">
      <div class="row g-0">
        <div class="col-md-4 d-flex justify-content-center align-items-center">
          <span class="effect">{{ item.letra }}</span>
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">
                <small class="text-muted">
                    <timeago :datetime="item.fecha" :auto-update="60"></timeago>
                </small>
            </p>
            <p class="card-text">
                {{ item.texto }}
            </p>
            <p class="card-text">
                <span class="material-icons material-icons-book">book</span>
            </p>
          </div>
        </div>
      </div>
    </div>
</template>

<script>
export default {
    props: ['item'],
    computed: {
         randomClass () {
             let i = Math.floor(Math.random() * (3 - 0) + 0);
             let colors = ['success', 'primary', 'secondary']
             return 'bg-' + colors[i];
         }
    }
};
</script>
