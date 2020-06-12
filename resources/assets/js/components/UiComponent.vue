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
                                <ul>
                                    <li>
                                      <a href="javascript::void(0)">  
                                            <div class="side-icon" style=" background:green">
                                                 <p style=" color:white"> GD </p>
                                            </div>
                                            <div class="side-name" >
                                                <p>Godwin Daniel</p>
                                            </div>
                                     </a>
                                    </li>
                                     <li>
                                      <a href="javascript::void(0)">  
                                            <div class="side-icon" style=" background:brown">
                                                 <p style=" color:white"> CB </p>
                                            </div>
                                            <div class="side-name" >
                                                <p>Cristiano Ronaldo</p>
                                            </div>
                                     </a>
                                    </li>
                                     <li>
                                      <a href="javascript::void(0)">  
                                            <div class="side-icon" style=" background:lightgrey">
                                                 <p style=" color:black"> LM </p>
                                            </div>
                                            <div class="side-name" >
                                                <p>Lionel Messi</p>
                                            </div>
                                     </a>
                                    </li>
                                    <li>
                                      <a href="javascript::void(0)">  
                                            <div class="side-icon" style=" background:blue">
                                                 <p style=" color:white"> DB </p>
                                            </div>
                                            <div class="side-name" >
                                                <p>David Beckham</p>
                                            </div>
                                     </a>
                                    </li>
                                    <li>
                                      <a href="javascript::void(0)">  
                                            <div class="side-icon" style=" background:brown">
                                                 <p style=" color:white"> CF </p>
                                            </div>
                                            <div class="side-name" >
                                                <p>Cesc Fabregas</p>
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
            
                        <table>
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
                                <tr>
                                        <td>
                                                 <label class="main"><input type="checkbox"><span class="main-checkbox"></span> </label>
                                        </td>
                                        <td>
                                            <div class="main-content-image">
                                                    <img src="/images/icon.png" alt="logo">
                                            </div>
                                        </td>
                                        <td data-column="Name">
                                            <p>Godwin Daniel<br><span>Vue-Laravel Dev</span></p>
                                            
                                        </td>
                                        <td data-column="Salary">
                                            <p> 20000 Naira <br><span>Full Time</span></p>
                                            
                                        </td>
                                        <td data-column="Status">
                                            <p>Staff<br><span>2 years</span></p>
                                            
                                        </td>
                                        <td data-column="Manage">
                                        <div class="actionClass">
                                            <div>
                                            <a href="javascript:void(0)"> 
                                                <img src="/images/icon-edit.png">
                                            </a>
                                            </div>
                                            <div class="divider"></div>
                                            <div>
                                                <a href="javascript:void(0)" >
                                                    <img src="/images/icon-trash.png">
                                                </a>
                                            </div>
                                            
                                        </div>
                                        
                                        </td>
                                </tr>
                                <tr>
                                        <td>
                                                 <label class="main"><input type="checkbox"><span class="main-checkbox"></span> </label>
                                        </td>
                                        <td>
                                            <div class="main-content-image">
                                                    <img src="/images/icon.png" alt="logo">
                                            </div>
                                        </td>
                                        <td data-column="Name">
                                            <p>Cristiano Ronaldo<br><span>React-Laravel Dev</span></p>
                                            
                                        </td>
                                        <td data-column="Salary">
                                            <p> 80000 Naira <br><span>Full Time</span></p>
                                            
                                        </td>
                                        <td data-column="Status">
                                            <p>Staff<br><span>1 years</span></p>
                                            
                                        </td>
                                        <td data-column="Manage">
                                        <div class="actionClass">
                                            <div>
                                            <a href="javascript:void(0)"> 
                                                <img src="/images/icon-edit.png">
                                            </a>
                                            </div>
                                            <div class="divider"></div>
                                            <div>
                                                <a href="javascript:void(0)" >
                                                    <img src="/images/icon-trash.png">
                                                </a>
                                            </div>
                                            
                                        </div>
                                        
                                        </td>
                                </tr>
                                <tr>
                                        <td>
                                                 <label class="main"><input type="checkbox"><span class="main-checkbox"></span> </label>
                                        </td>
                                        <td>
                                            <div class="main-content-image">
                                                    <img src="/images/icon.png" alt="logo">
                                            </div>
                                        </td>
                                        <td data-column="Name">
                                            <p>Lionel Messi<br><span>Angular Dev</span></p>
                                            
                                        </td>
                                        <td data-column="Salary">
                                            <p> 70000 Naira <br><span>Full Time</span></p>
                                            
                                        </td>
                                        <td data-column="Status">
                                            <p>Staff<br><span>5 years</span></p>
                                            
                                        </td>
                                        <td data-column="Manage">
                                        <div class="actionClass">
                                            <div>
                                            <a href="javascript:void(0)"> 
                                                <img src="/images/icon-edit.png">
                                            </a>
                                            </div>
                                            <div class="divider"></div>
                                            <div>
                                                <a href="javascript:void(0)" >
                                                    <img src="/images/icon-trash.png">
                                                </a>
                                            </div>
                                            
                                        </div>
                                        
                                        </td>
                                </tr>
                                <tr>
                                        <td>
                                                 <label class="main"><input type="checkbox"><span class="main-checkbox"></span> </label>
                                        </td>
                                        <td>
                                            <div class="main-content-image">
                                                    <img src="/images/icon.png" alt="logo">
                                            </div>
                                        </td>
                                        <td data-column="Name">
                                            <p>David Beckham<br><span>C-Sharp Dev</span></p>
                                            
                                        </td>
                                        <td data-column="Salary">
                                            <p> 60000 Naira <br><span>Full Time</span></p>
                                            
                                        </td>
                                        <td data-column="Status">
                                            <p>Staff<br><span>1 years</span></p>
                                            
                                        </td>
                                        <td data-column="Manage">
                                        <div class="actionClass">
                                            <div>
                                            <a href="javascript:void(0)"> 
                                                <img src="/images/icon-edit.png">
                                            </a>
                                            </div>
                                            <div class="divider"></div>
                                            <div>
                                                <a href="javascript:void(0)" >
                                                    <img src="/images/icon-trash.png">
                                                </a>
                                            </div>
                                            
                                        </div>
                                        
                                        </td>
                                </tr>
                                <tr>
                                        <td>
                                                 <label class="main"><input type="checkbox"><span class="main-checkbox"></span> </label>
                                        </td>
                                        <td>
                                            <div class="main-content-image">
                                                    <img src="/images/icon.png" alt="logo">
                                            </div>
                                        </td>
                                        <td data-column="Name">
                                            <p>Cesc Fabregas<br><span>Java Dev</span></p>
                                            
                                        </td>
                                        <td data-column="Salary">
                                            <p> 10000 Naira <br><span>Full Time</span></p>
                                            
                                        </td>
                                        <td data-column="Status">
                                            <p>Staff<br><span>4 years</span></p>
                                            
                                        </td>
                                        <td data-column="Manage">
                                        <div class="actionClass">
                                            <div>
                                            <a href="javascript:void(0)"> 
                                                <img src="/images/icon-edit.png">
                                            </a>
                                            </div>
                                            <div class="divider"></div>
                                            <div>
                                                <a href="javascript:void(0)" >
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
        },
        mounted(){
        },
    }
</script>
<style scoped>

</style>