<template>
<nav class="navbar">
            <div class="logo-container">
                <img src="/images/logo.png" alt="Company Logo">
                <p class="icon-text">internia</p>
            </div>
            <div class="menu-toggle" id="mobile-menu" @click="toggleClass()">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
            </div>
            <ul class="nav" :class=" mobilePoint ? 'mobile-nav is-active': ''">
                
            <li class="nav-item"><a :href="'/'"  :class="HomeActive ?'active' :' '">Home</a></li>
            <li class="nav-item"><a href="#">About</a></li>
            <li class="nav-item"><a :href="'/getEmployeePage'"  :class="EmployeeActive ?'active' :' '">Employee</a></li>
            <li class="nav-item"><a href="#">Careers</a></li>
            <li class="nav-item"><a href="#">Contact Us</a></li>
            </ul>
            <ul class="nav_2">
            <li class="nav-item"><div class="iconImage"><img src="/images/icon-img.png" ></div></li>
            <li class="nav-item"><div class="iconImage"><img src="/images/icon-bell.png" ></div></li>
            </ul>
        </nav>
</template>
<script>
  export default{
        data(){
        
            return {
        mobilePoint : false,
        HomeActive:false,
        EmployeeActive:false,
            }
        },
        methods:{
        toggleClass(){
            this.mobilePoint = !this.mobilePoint;
        },
        getActiveNav(){
            var nav = window.location.href
            if(nav ==='http://localhost:8000/#' 
            || nav === 'http://localhost:8000/' 
            || nav === 'http://localhost:8000'
            || nav === 'http://localhost:8000#'
            ){
                this.HomeActive = true;
                this.EmployeeActive=false;
            }else if(
             nav === 'http://localhost:8000/getEmployeePage'
            || nav ==='http://localhost:8000/getEmployeePage/#'
            || nav ==='http://localhost:8000/getEmployeePage#'){
                this.EmployeeActive = true;
                this.HomeActive = false;
            }else{
                this.EmployeeActive = false;
                this.HomeActive = false;
            }
            
        }
        },
        mounted() {
            this.getActiveNav();
        }
    }
</script>