<script setup >
    import { Link } from '@inertiajs/vue3'


</script>

<template>
    <div>
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                  <!-- <a class="navbar-brand" href="#">
                    <Link :href="route('home')"> Home</Link>
                  </a> -->
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" ><Link :href="route('home')"> Home</Link></a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" >  <Link :href="route('contact')"> Contact</Link></a>
                      </li>


                      <li class="nav-item">
                        <Link :href="route('admin')" class="nav-link"> Admin</Link>
                      </li>


                      <li class="nav-item">
                        <a class="nav-link" href="#"><Link :href="route('register')"> Register</Link></a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Dropdown
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                      </li>


                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page"><Link :href="route('logout')"> Logout</Link></a>
                      </li>


                    </ul>
                    <form class="d-flex" role="search">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>

                  </div>
                </div>
              </nav>
            <nav>

            </nav>
        </header>
        <main class="">
        <slot/>
        </main>
    </div>
</template>
