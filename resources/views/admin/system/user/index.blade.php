@extends('admin.element')
@section('title', '用户列表')
@section('main')
    <div>
        <el-config-provider :locale="locale">
            <el-form :inline="true" :model="pageData.form">
                <el-form-item>
                    <el-input v-model="pageData.form.id" placeholder="ID"></el-input>
                </el-form-item>
                <el-form-item>
                    <el-button type="primary" @click="onSubmit">查找</el-button>
                </el-form-item>
            </el-form>
        </el-config-provider>
    </div>
@endsection
@section('script')
    <script>
        const app = Vue.createApp({
            data() {
                return {
                    locale: {
                        ...locale
                    },
                    pageData: {
                        form: {
                            id: '',
                        },
                    },
                }
            },
            created() {},
            mounted() {},
            methods: {
                onSubmit() {
                    console.log(this.pageData);
                }
            }
        })
        app.use(ElementPlus);
        for (const [key, component] of Object.entries(ElementPlusIconsVue)) {
            app.component(key, component)
        }
        app.mount('#page')
    </script>
@endsection
