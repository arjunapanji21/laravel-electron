<template lang="">
    <div data-theme="winter">
        <div class="hero min-h-screen bg-primary">
            <div class="hero-content block">
                <div class="text-center">
                    <h1 class="text-5xl font-bold py-4 text-primary-content">KOBAPS</h1>
                </div>
                <div class="card w-80 shadow-2xl bg-base-100">
                    <div class="card-body">
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Email</span>
                            </label>
                            <input
                                type="text"
                                placeholder="email"
                                class="input input-bordered"
                                v-model="form.email"
                            />
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Password</span>
                            </label>
                            <input
                                type="password"
                                placeholder="password"
                                class="input input-bordered"
                                v-model="form.password"
                            />
                        </div>
                        <div class="form-control mt-6">
                            <button @click="btn_submit" type="submit"  class="btn btn-primary"
                                >Login</button
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import { useForm } from "@inertiajs/inertia-vue3";
export default {
    setup(props) {
        const form = useForm({
            email: null,
            password: null,
        });
        return { form };
    },
    methods: {
        btn_submit() {
            this.form.post(route("auth"), {
                // onSuccess: () => {
                //     alert("Login Success!");
                // },
                // preserveScroll: true,
            });
        },
    },
};
</script>
<style lang=""></style>
