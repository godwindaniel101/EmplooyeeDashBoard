<template>
<div class="page-wrapper">
    <div class="nav-wrapper">
            <Nav></Nav>
    </div>
      <section class="body-top">
            <p>Craete Employee</p> <a :href="'/'" target=”_blank” class="btn">Back</a>
    </section>
    <div class="form-wrappper">
        <div class="form-container">
            <div class="form-item">
                <label for="first_name" class="form-label">First Name</label>
                <input  v-model="data.first_name" :class="error.first_name? 'form-error' : ''" type="text" class="form-input">
            </div>
            <div class="form-item">
                <label for="first_name" class="form-label">Last Name</label>
                <input  v-model="data.last_name" :class="error.last_name? 'form-error' : ''" type="text" class="form-input">
            </div>
            <div class="form-item">
                <label for="phone_no" class="form-label">Phone Number</label>
                <input  v-model="data.phone_no" :class="error.phone_no? 'form-error' : ''" type="text" class="form-input">
            </div>
            <div class="form-item">
                <label for="email" class="form-label">Email</label>
                <input  v-model="data.email" :class="error.email? 'form-error' : ''" type="text" class="form-input">
            </div>
            <div class="form-item">
                <label for="position" class="form-label">Position</label>
                <input  v-model="data.position" :class="error.position? 'form-error' : ''" type="text" class="form-input">
            </div>
            <div class="form-item">
                <label for="salary" class="form-label">Salary</label>
                <input  v-model="data.salary" :class="error.salary? 'form-error' : ''" type="text" class="form-input">
            </div>
            <div class="form-item">
                <label for="type" class="form-label">Type</label>
                <input  v-model="data.type" :class="error.type? 'form-error' : ''" type="text" class="form-input">
            </div>
            <div class="form-item">
                <label for="status" class="form-label">Status</label>
                <input  v-model="data.status" :class="error.status? 'form-error' : ''" type="text" class="form-input">
            </div>
            <div class="form-item">
                <label for="duration" class="form-label">Duration</label>
                <input  v-model="data.duration" :class="error.duration? 'form-error' : ''" type="text" class="form-input">
            </div>
        </div>
        <div class="uploadBtnContainer">
             <a href="javascript:void(0)"  class="btn" @click.prevent="createEmployee()">Create Employee</a>
        </div>
       
    </div>
</div>
</template>
<script>
import  Nav from  './Nav';
    export default {
        components:{
            Nav
        },
        data(){
        
            return {
        mobilePoint : false,
        data :{
            last_name : '',
            first_name : '',
            email : '',
            phone_no : '',
            position : '',
            salary : '',
            type : '',
            status : '',
            duration:'',
        },
        error :{
            last_name : false,
            first_name : false,
            email : false,
            phone_no : false,
            position : false,
            salary : false,
            type : false,
            status : false,
            duration:false,
        }
            }
        },
        methods :{
            createEmployee(){
                var unitError = 0;
                var data = this.data;
                var error = this.error; 
                if(data.last_name == null || data.last_name == ''){
                    unitError++
                    error.last_name = true
                }else{
                    error.last_name = false
                }

                 if(data.first_name == null || data.first_name == ''){
                    unitError++
                    error.first_name = true
                }else{
                    error.first_name = false
                }

                 if(data.email == null || data.email == ''){
                    unitError++
                    error.email = true
                }else{
                    error.email = false
                }
                 if(data.phone_no == null || data.phone_no == ''){
                    unitError++
                    error.phone_no = true
                }else{
                    error.phone_no = false
                }

                 if(data.position == null || data.position == ''){
                    unitError++
                    error.position = true
                }else{
                    error.position = false
                }
                if(data.salary == null || data.salary == ''){
                    unitError++
                    error.salary = true
                }else{
                    error.salary = false
                }
                if(data.type == null || data.type == ''){
                    unitError++
                    error.type = true
                }else{
                    error.type = false
                }
                if(data.status == null || data.status == ''){
                    unitError++
                    error.status = true
                }else{
                    error.status = false
                }
                if(data.duration == null || data.duration == ''){
                    unitError++
                    error.duration = true
                }else{
                    error.duration = false
                }
                if(unitError < 1){
                    axios.post('http://localhost:8000/api/employee' , this.data).then((datas)=>{
                        console.log(datas);
                    if(datas.data.status == true){
                        alert(datas.data.message);
                        this.data.last_name = '';
                        this.data.first_name = '';
                        this.data.email = '';
                        this.data.phone_no = '';
                        this.data.position = '';
                        this.data.salary = '';
                        this.data.type = '';
                        this.data.status = '';
                        this.data.duration='';

                    }else{
                        alert(datas.data.message);
                    }
                }).catch((data)=>{
                    console.log(data.data);
                })
                }else{
                    // alert('No');
                }
                
            },
            getEditDetails(){
                if(this.$route.params.id){
                    alert(  this.$route.params.id);
                }
            },
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style scoped>
a{
   text-decoration:none !important;
   color:white ;
   font-size:12px;
  }
  a.btn{
    text-decoration:none !important;
    padding:5px 25px;
    color:white!important;
    font-weight:600;
    text-align:center;
    background:#0ec9ae;
    border-radius:20px;
  }
</style>