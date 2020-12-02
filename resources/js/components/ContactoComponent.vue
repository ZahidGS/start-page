<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="m-5 text-center">SEND US A MESSAGE</h2>
                <form @submit.prevent="enviar">
                    <input type="text" class="form-control p-4 h4 redondear"
                    placeholder="Full Name" v-model="contact.name">
                    <input type="text" class="form-control p-4 h4 redondear"
                    placeholder="Email" v-model="contact.email">
                    <input type="text" class="form-control p-4 h4 redondear"
                    placeholder="Phone" v-model="contact.phone">
                    <textarea name="" id="" rows="6" class="form-control p-4 h4 redondear"
                        placeholder="Your Message" v-model="contact.message"></textarea>
                    <div class="text-center">
                    <button type="submit" class="btn btn-primary redondear px-3"><ion-icon name="paper-plane"></ion-icon> Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                contact: {name: '', email: '', phone: '',message:''}
            }
        },
        methods: {
            enviar(){

                if (
                    this.contact.name.trim() === '' ||
                    this.contact.email.trim() === '' ||
                    this.contact.phone.trim() === '' ||
                    this.contact.message.trim() === ''
                    ) {
                    alert('Debes completar todos los campos antes de guardar');
                    return;
                }

                console.log(this.contact.name, this.contact.email, this.contact.phone, this.contact.message)
                const params = {
                    name:this.contact.name,
                    email:this.contact.email,
                    phone:this.contact.phone,
                    message:this.contact.message,
                }

                this.contact.name = '';
                this.contact.email = '';
                this.contact.phone = '';
                this.contact.message = '';


                axios.post('/contacto', params)
                    .then(res => {
                        alert(res);
                    })
            },
        },
    }
</script>
