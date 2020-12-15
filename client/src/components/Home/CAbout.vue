<template>
    <div class="cabout">
        <div class="container">
            <div class="background-img">
                <div class="detail">
                    <div class="detail-title">
                            <h2>We delivery Malaysia wide!</h2>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus quaerat similique repudiandae, consequuntur distinctio id rem aut veniam autem voluptatum iste, adipisci, excepturi alias inventore mollitia repellendus libero quod accusamus.
                            </p>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br>
    </div>
</template>

<script>
export default {
    name:'CAbout'
}
</script>

<style lang="scss" scoped>
    .cabout{
        margin-top: 5rem;
        
        .container{
            width: 80%;
            
        .background-img{
            height: 50vh;
            background-image: linear-gradient(to right,rgba(0, 0, 0, 0.1),rgba(0, 0, 0, 0.1)),url("../../assets/delivery.jpg");
            background-size: cover;
            background-position: center;
            position: relative;

            .detail{
                display: block;
                height: 100%;
                width: 100%;
                position: absolute;
                background: rgba(71, 71, 71, 0.9);
                border: none;
                clip-path: polygon(100% 0%, 100% 100%, 40% 100%, 55% 0%);

                &-title{
                    position: absolute;
                    right: 0;
                    width: 35%;
                    text-align: left;
                    margin-top: 10%;
                    margin-right: 10%;
                    h2{
                        color: white;
                        font-size: 300%;
                        font-weight: 200;
                        margin-bottom: 10%;
                    }
                    p{
                        color: white;
                        font-size: 150%;
                        letter-spacing: .2rem;
                    }
                }
            
            }
        }
        }
    }
</style>