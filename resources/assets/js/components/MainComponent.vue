<template>
<div class="page-wrapper">
 <div class="nav-wrapper">
        <Nav></Nav>
</div>
  <section class="body-top">
            <p>employee</p> <a :href="'/createEmployee'" target=”_blank” class="btn">add employee</a>
    </section>
  <section class="features">
      <div class="feature-container">
        <div class="nav-side">
                    <div class="nav-side-bar">
                        
                        <div class="nav-side-bar-image">
                            <div class="side-img">
                                <img src="/images/logo.png" alt="logo">
                            </div>
                            <div class="side-text">
                                <p class="" @click="getEmployee()">All Employee</p>
                            </div>
                        </div>
                        <div class="nav-side-bar-notice">
                            <p class="">PROJECT</p>
                             <div v-if="issue">
                                <p>
                                    <span v-text="responseMessage"></span><br>
                                </p>
                            </div>
                                <ul v-else>
                                    <li  v-for="data in employeeName" :key="employeeName.id">
                                      <a :href="'/viewEmployee/'+ data.id" target=”_blank”>  
                                            <div class="side-icon" v-bind:style="{ background: data.activeBackgroundColor}">
                                                 <p v-bind:style="{ color:data.activeColor}">{{data.abbr}} </p>
                                            </div>
                                            <div class="side-name" >
                                                <p>{{data.name}}</p>
                                            </div>
                                     </a>
                                    </li>
                                </ul>
                            <div class="btn2Class">
                                <a href="#" class="btn2">add Project</a>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    <div class="feature-container_2 ">
        <div class="main-content">
        <div class="main-content-table">
                        <div class="noRecordTable" v-if="issue">
                            <p>
                                <span v-text="responseMessage"></span><br>
                                <span v-text="responseMessage2"></span><a :href="'/'">View UI Implementation</a>
                            </p>
                        </div>
                        <table v-else>
                            <thead>
                                <tr>
                                    <th>
                                         <label class="main"><input type="checkbox"><span class="main-checkbox"></span> </label>
                                    </th>
                                    <th></th>
                                    <th><p>EMPLOYEE</p></th>
                                    <th><p>SALARY</p></th>
                                    <th><p>STATUS</p></th>
                                    <th><p>MANAGE</p></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="data in employessDetail" :key="employessDetail.id">
                                        <td>
                                                 <label class="main"><input type="checkbox"><span class="main-checkbox"></span> </label>
                                        </td>
                                        <td>
                                            <div class="main-content-image">
                                                    <img src="/images/icon.png" alt="logo">
                                            </div>
                                        </td>
                                        <td data-column="Name">
                                            <p> {{data.first_name}} {{data.last_name}} <br><span>{{data.position}}</span></p>
                                            
                                        </td>
                                        <td data-column="Salary">
                                            <p> {{data.salary}} Naira <br><span>{{data.type}}</span></p>
                                            
                                        </td>
                                        <td data-column="Status">
                                            <p>{{data.status}}<br><span>{{data.duration}}</span></p>
                                            
                                        </td>
                                        <td data-column="Manage">
                                        <div class="actionClass">
                                            <div>
                                            <a :href="'/editEmployee/'+ data.id "> 
                                                <img src="/images/icon-edit.png" target=”_blank”>
                                            </a>
                                            </div>
                                            <div class="divider"></div>
                                            <div>
                                                <a href="javascript:void(0)" @click="deleteUser(data.id)">
                                                    <img src="/images/icon-trash.png">
                                                </a>
                                            </div>
                                            
                                        </div>
                                        
                                        </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
    </div>
    </div>
  </section>
</div>
</template>
<script>
import  Nav from  './Nav';
    export default {
        components:{
            Nav,
            
        },   
        data(){       
            return {
                issue:false,
                responseMessage:'',
                responseMessage2:'',
                mobilePoint : false,
                employessDetail:{},
                employeeName:[],
            }
        },
        methods :{
            toggleClass(){
                this.mobilePoint = !this.mobilePoint;
            },
            getEmployee(){
                this.responseMessage = 'No Employee Record Found';
                this.responseMessage2 ="Please add an Employee or "


            axios.get('api/employee').then((datas)=>{
                var result = datas.data.data
                if(result.length < 1){
                    this.issue = true;
                    this.responseMessage = 'No Employee Record Found';
                this.responseMessage2 ="Please Create an Employee or "
                }else{
                this.issue = false;
                this.responseMessage = '';
                this.responseMessage2 =""
                }
                this.employessDetail = datas.data.data
                var  arraylength = datas.data.data.length
                var obj = {};
                for(let i = 0 ;  i < arraylength ; i++){
                    var first_name = datas.data.data[i]['first_name'];
                    var colorChecker = first_name.charAt(0);



                    //this section is to determine the icon color
                      if(colorChecker === 'b' || colorChecker === 'B'){
                        var activeBackgroundColor ='black';
                        var activeColor = 'white';
                    }else if(colorChecker === 'g' || colorChecker === 'G'){
                         var activeBackgroundColor ='green';
                        var activeColor = 'white';
                        
                    }
                    else if(colorChecker === 'd' || colorChecker === 'D'){
                         var activeBackgroundColor ='yellow';
                        var activeColor = 'black';
                        
                    }
                    else if(colorChecker === 'i' || colorChecker === 'I'){
                         var activeBackgroundColor ='purple';
                        var activeColor = 'white';
                        
                    }
                    else if(colorChecker === 'r' || colorChecker === 'R'){
                         var activeBackgroundColor ='red';
                        var activeColor = 'white';
                        
                    }
                    else if(colorChecker === 'p' || colorChecker === 'P'){
                         var activeBackgroundColor ='grey';
                        var activeColor = 'white';
                        
                    }else{
                         var activeBackgroundColor ='pink';
                        var activeColor = 'white';
                    }
                    var last_name = datas.data.data[i]['last_name']
                    var id = datas.data.data[i]['id']
                   this.employeeName.push({
                       'name' : first_name + ' ' + last_name,
                       'abbr' : first_name.charAt(0) + last_name.charAt(0),
                       'id': id,
                       'activeBackgroundColor':activeBackgroundColor,
                       'activeColor':activeColor,
                   })
                }
                    console.log(this.employeeName);
                    console.log('yes');
                }).catch((data)=>{
                this.issue = true;
                this.responseMessage = 'Error  Connecting!';
                this.responseMessage2 ="Could not connect to server please "
                })
            },
            deleteUser($id){
                 axios.delete('api/employee/' + $id).then((datas)=>{
                     alert(datas.data.message);
                     this.employeeName=[];
                     this.getEmployee()
                 }).catch(()=>{

                 })
            },
        },
        mounted(){
            this.getEmployee()
        },
    }
</script>
<style scoped>

</style>