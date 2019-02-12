<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        <ul>
                            <li v-for="message in messages" :key="message.id">{{ message }}</li>
                        </ul>
                        <input type="text" v-model="message" @keyup.enter="ally">
                        <button @click="ally">+</button>
                        <button @click="del">x</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data: function () {
            return {
                messages:[],
                message:''
            }
        },
        methods: {
            ally: function() {
                if(this.message.length > 0) {
                    this.messages.push(this.message);
                    this.message = ''
                } else {
                    alert('message field empty')
                }
                
            },
            del: function() {
                this.messages = ''
            }
        },
    }
</script>
