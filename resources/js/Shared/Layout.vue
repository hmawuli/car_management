<template>
    <div>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">

                <inertia-link class="navbar-brand" href= "/">car_management</inertia-link>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    car_management<span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                  <!--  <a class="dropdown-item" href="#" @click="handleLogout">Logout</a> -->
                                    <inertia-link href="/logout" method="post">Logout</inertia-link>
                                </div>
                            </li>

                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <slot/>
        </main>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    method: {
        handlelogout(){

        }
    }

}
</script>

<style>

</style>
