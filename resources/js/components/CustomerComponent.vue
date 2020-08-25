<template>
<v-app>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{name }}</h5>
                <span class="card-subtitle">{{ email }}</span>
                <p class="card-text">{{ message }}</p>
            </div>
        </div>
    </div>

</v-app>
</template>

<script>
export default {
    props: ['name', 'email', 'message'],
    data: () => ({}),
}
</script>
