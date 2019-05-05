<template>
    <div class="chat_window">
        <div class="top_menu">
            <div class="buttons">
                <div class="button close">

                </div>
                <div class="button minimize">

                </div>
                <div class="button maximize">

                </div>
            </div>
            <div class="title">{{ user.name }}</div>
        </div>
        <ul class="messages feed" ref="feed" v-if="user">
            <li v-for="message in messages" :class="`message${message.receiver_id == user.id ? ' right appeared' : ' left appeared'}`" :key="message.id">
                <div class="avatar">
                    <img style="max-height: 60px" :src="`${message.receiver_id == user.id ? auth.avatar : user.avatar}`" class="rounded-circle img-responsive" alt="">

                </div>
                <div class="text_wrapper">
                    <div class="text">{{ message.text }}</div>
                </div>
            </li>
        </ul>


        <div class="bottom_wrapper clearfix">
            <div class="message_input_wrapper">
                <input class="message_input" v-model="message" @keydown.enter="send" placeholder="Type your message here..." />
            </div>
            <div class="send_message">
                <div class="icon"></div>
                <div class="text" @click="send"><i class="fas fa-paper-plane"></i> </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted(){
            this.chat();
            // this.$nextTick(function () {
            //     window.setInterval(() => {
            //         this.chat();
            //     },5000);
            // })
        },
        data(){
            return {
                message : '',
                selectedContact: null,
                messages: [],
                contacts: []
            }
        },
        props: ['user','auth'],
        methods: {
            chat(){
                // console.log(this.user.id)
                axios.get(`/chat/conversation/${this.user.id}`)
                    .then((response)=> {
                        this.messages = response.data;
                    })

            },
            send(e){
                e.preventDefault();
                if(this.message == ''){
                    return;
                }
                // if(!this.contact){
                //     return;
                // }
                axios.post('/chat/conversation/send', {
                    contact_id: this.user.id,
                    text:this.message
                }).then((response)=>{
                    // console.log(response.data)
                    this.$emit('new', response.data)
                    this.messages.push(response.data);
                    // console.log(this.contact.id);
                })
            },
            // send(e){
            //     e.preventDefault();
            //     if(this.message == ''){
            //         return;
            //     }
            //     this.$emit('send', this.message);
            //
            //     this.message = '';
            // },
            scrollToBottom() {
                setTimeout(() => {
                    this.$refs.feed.scrollTop = this.$refs.feed.scrollHeight - this.$refs.feed.clientHeight;
                }, 50);
            }

        },
        watch: {
            // contact(contact) {
            //     this.scrollToBottom();
            // },
            messages(messages) {
                this.scrollToBottom();
            }
        }
    }
</script>
