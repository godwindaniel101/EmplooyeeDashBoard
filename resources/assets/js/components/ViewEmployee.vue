<template>
<div class="page-wrapper">
 <div class="nav-wrapper">
    <Nav></Nav>
</div>

      <section class="body-top">
            <p>View Employee</p> <a :href="'/'" target=”_blank” class="btn">Back</a>
    </section>
<div class="profie_-details">
   <div class="img-container">
       <img src="/images/logo.png">
    </div> 
    <div class="detail-container">

        <div class="detail-item">
            <div class="detail-tag">Name</div>
            <div class="detail">{{data.first_name + ' ' + data.last_name}}</div>
        </div>

        <div class="detail-item">
            <div class="detail-tag">Email</div>
            <div class="detail">{{data.email}}</div>
        </div>

        <div class="detail-item">
            <div class="detail-tag">Number</div>
            <div class="detail">{{data.phone_no}}</div>
        </div>
        <div class="detail-item">
            <div class="detail-tag">Position</div>
            <div class="detail">{{data.position}}</div>
        </div>
        <div class="detail-item">
            <div class="detail-tag">Salary</div>
            <div class="detail">{{data.salary}}</div>
        </div>
        <div class="detail-item">
            <div class="detail-tag">Email</div>
            <div class="detail">{{data.type}}</div>
        </div>
        <div class="detail-item">
            <div class="detail-tag">Status</div>
            <div class="detail">{{data.status}}</div>
        </div>
        <div class="detail-item">
            <div class="detail-tag">Duration</div>
            <div class="detail">{{data.duration}}</div>
        </div>
    </div>
</div>
</div>
</template>
<script>
import  Nav from  './Nav';
    export default {
        props: ['id'],
        components:{
            Nav,
            
        }, 
    data(){
        return{
            data:{
            last_name : '',
            first_name : '',
            email : '',
            phone_no : '',
            position : '',
            salary : '',
            type : '',
            status : '',
            duration:'',
            }
        }
    },
    methods:{
        getUserDetail(){
            var id = this.id
            axios.get('http://localhost:8000/api/employee/' + id).then((datas)=>{
                        this.data.last_name = datas.data.data.last_name ;
                        this.data.first_name =  datas.data.data.first_name ;
                        this.data.email =  datas.data.data.email ;
                        this.data.phone_no =  datas.data.data.phone_no ;
                        this.data.position =  datas.data.data.position ;
                        this.data.salary =  datas.data.data.salary ;
                        this.data.type =  datas.data.data.type ;
                        this.data.status =  datas.data.data.status ;
                        this.data.duration= datas.data.data.duration ;
            }).catch(()=>{

            })
        }
    },
    mounted(){
        this.getUserDetail();
    }
}
</script>
<style scoped>
.profie_-details{
    display: flex;
 width:50%;
 margin:20px auto;
  flex-direction:column;
  border-radius :10px;
  border:1px lightgrey;
  padding: 10px;
   -webkit-box-shadow: 0px 6px 10px -6px rgba(186,184,186,1);
-moz-box-shadow: 0px 6px 10px -6px rgba(186,184,186,1);
box-shadow: 0px 6px 10px -6px rgba(186,184,186,1);
}
.img-container{
width:80px;
margin:20px auto;
display:flex;
align-content:center;
justify-content: center;
}
.detail-container{
/* display: grid; */
  grid-template-columns: 1fr 3fr ;
  font-family:'Niramit';
  font-weight: 600;
}
.detail-item{
    display:flex;
    width:100%;
    flex-direction: row;
    height:50px;
    border:1px solid white;

}
.detail{min-width:60%;
 line-height:40px;
  display:flex;
  padding-left:1%;
}
.detail-tag{min-width:40%;
 line-height:40px;
  display:flex;
    align-content: center;
    justify-content: center;
    background:grey;color:white;}
</style>