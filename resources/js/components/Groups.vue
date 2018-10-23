<template>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Groups Table</h3>
                        <div class="card-tools">
                            <button class="btn btn-success" @click="addGroup">Add new <i class="fas fa-user-plus fa-fw"></i></button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Params</th>
                                    <th>Description</th>
                                    <th>Registered At</th>
                                    <th>Modify</th>
                                </tr>
                                <tr v-for="group in groups" :key="group.id">
                                    <td>{{group.id}}</td>
                                    <td>{{group.name}}</td>
                                    <td>{{group.params}}</td>
                                    <td>{{group.description}}</td>
                                    <td>{{group.created_at | myDate}}</td>
                                    <td>
                                        <a href="#" @click="editGroup(group)">
                                            <i class="fa fa-edit blue"></i>
                                        </a>
                                        /
                                        <a href="#" @click="deleteGroup(group.id)">
                                            <i class="fa fa-trash red"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <div class="modal" id="addNew">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" v-show="editmode">Update group's info</h5>
                        <h5 class="modal-title" v-show="!editmode">Add new</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form @submit.prevent="editmode ? updateGroup() : createGroup()">
                        <div class="modal-body">
                            <div class="form-group">
                                <input v-model="form.name" type="text" name="name" placeholder="Name" class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                                       <has-error :form="form" field="name"></has-error>
                            </div>
                            <div class="form-group">
                                <textarea v-model="form.description" name="description" id="description" placeholder="Description (Optional)" class="form-control" :class="{'is-invalid':form.errors.has('description')}"></textarea>
                                <has-error :form="form" field="description"></has-error>
                            </div>
                            <div class="form-group">
                                <v-jstree :data="jstreedata" show-checkbox multiple allow-batch whole-row @item-click="itemClick"></v-jstree>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" v-show="editmode" class="btn btn-success">Update</button>
                            <button type="submit" v-show="!editmode" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import VJstree from 'vue-jstree';
    export default {
        data() {
            return {
                editmode: false,
                groups: {},
                form: new Form({
                    id: '',
                    name: '',
                    params: '',
                    description: ''
                }),
                jstreedata: []
            };
        },
        components: {
            VJstree
        },
        methods: {
            editGroup(group) {
                this.editmode = true;
                this.form.reset();
                $('#addNew').modal('show');
                this.form.fill(group);
                this.jstreedata = [
                    {
                        "id": 0,
                        "text": "Quyền Hệ Thống",
                        "value": "gia tri 1",
                        "icon": "",
                        "opened": true,
                        "selected": false,
                        "disabled": false,
                        "loading": false,
                        "children": [
                            {
                                "id": 1,
                                "text": "Hệ Thống",
                                "value": "he thong",
                                "icon": "",
                                "opened": true,
                                "selected": true,
                                "disabled": false,
                                "loading": false,
                                "children": [
                                    {
                                        "id": 111,
                                        "text": "Nhóm Quyền",
                                        "value": "nhom quyen",
                                        "icon": "",
                                        "opened": true,
                                        "selected": false,
                                        "disabled": false,
                                        "loading": false,
                                        "children": [
                                            {
                                                "id": 1115,
                                                "text": "Xem",
                                                "value": "xem",
                                                "icon": "fa fa-key blue",
                                                "opened": true,
                                                "selected": false,
                                                "disabled": false,
                                                "loading": false,
                                                "children": [

                                                ]
                                            },
                                            {
                                                "id": 1111,
                                                "text": "Thêm mới",
                                                "value": "them-moi",
                                                "icon": "fa fa-key blue",
                                                "opened": true,
                                                "selected": false,
                                                "disabled": false,
                                                "loading": false,
                                                "children": [

                                                ]
                                            },
                                            {
                                                "id": 1112,
                                                "text": "Chỉnh sửa",
                                                "value": "sua",
                                                "icon": "fa fa-key blue",
                                                "opened": true,
                                                "selected": false,
                                                "disabled": false,
                                                "loading": false,
                                                "children": [

                                                ]
                                            },
                                            {
                                                "id": 1113,
                                                "text": "Xóa",
                                                "value": "xoa",
                                                "icon": "fa fa-key blue",
                                                "opened": true,
                                                "selected": false,
                                                "disabled": false,
                                                "loading": false,
                                                "children": [

                                                ]
                                            }
                                        ]
                                    },
                                    {
                                        "id": 112,
                                        "text": "Tài Khoản",
                                        "value": "tai khoan",
                                        "icon": "",
                                        "opened": true,
                                        "selected": false,
                                        "disabled": false,
                                        "loading": false,
                                        "children": [
                                            {
                                                "id": 100,
                                                "text": "Xem",
                                                "value": "xem",
                                                "icon": "fa fa-key blue",
                                                "opened": true,
                                                "selected": false,
                                                "disabled": false,
                                                "loading": false,
                                                "children": [

                                                ]
                                            },
                                            {
                                                "id": 101,
                                                "text": "Thêm mới",
                                                "value": "them-moi",
                                                "icon": "fa fa-key blue",
                                                "opened": true,
                                                "selected": false,
                                                "disabled": false,
                                                "loading": false,
                                                "children": [

                                                ]
                                            },
                                            {
                                                "id": 102,
                                                "text": "Chỉnh sửa",
                                                "value": "sua",
                                                "icon": "fa fa-key blue",
                                                "opened": true,
                                                "selected": false,
                                                "disabled": false,
                                                "loading": false,
                                                "children": [

                                                ]
                                            },
                                            {
                                                "id": 103,
                                                "text": "Xóa",
                                                "value": "xoa",
                                                "icon": "fa fa-key blue",
                                                "opened": true,
                                                "selected": false,
                                                "disabled": false,
                                                "loading": false,
                                                "children": [

                                                ]
                                            }
                                        ]
                                    },
                                    {
                                        "id": 113,
                                        "text": "Cấu Hình",
                                        "value": "cau hinh",
                                        "icon": "",
                                        "opened": true,
                                        "selected": false,
                                        "disabled": false,
                                        "loading": false,
                                        "children": []
                                    }
                                ]
                            },
                            {
                                "id": 7,
                                "text": "Danh Mục",
                                "value": "danh-muc",
                                "icon": "",
                                "opened": true,
                                "selected": false,
                                "disabled": false,
                                "loading": false,
                                "children": [
                                    {
                                        "id": 71,
                                        "text": "Sách",
                                        "value": "sach",
                                        "icon": "",
                                        "opened": true,
                                        "selected": true,
                                        "disabled": false,
                                        "loading": false,
                                        "children": [
                                            {
                                                "id": 72,
                                                "text": "Tiếng Việt",
                                                "value": "tieng-viet",
                                                "icon": "",
                                                "opened": true,
                                                "selected": false,
                                                "disabled": false,
                                                "loading": false,
                                                "children": [
                                                    {
                                                        "id": 73,
                                                        "text": "Sách giáo khoa",
                                                        "value": "tieng-viet",
                                                        "icon": "",
                                                        "opened": true,
                                                        "selected": false,
                                                        "disabled": false,
                                                        "loading": false,
                                                        "children": [
                                                            {
                                                                "id": 1000,
                                                                "text": "Xem",
                                                                "value": "xem",
                                                                "icon": "fa fa-key blue",
                                                                "opened": true,
                                                                "selected": false,
                                                                "disabled": false,
                                                                "loading": false,
                                                                "children": [

                                                                ]
                                                            },
                                                            {
                                                                "id": 1010,
                                                                "text": "Thêm mới",
                                                                "value": "them-moi",
                                                                "icon": "fa fa-key blue",
                                                                "opened": true,
                                                                "selected": false,
                                                                "disabled": false,
                                                                "loading": false,
                                                                "children": [

                                                                ]
                                                            },
                                                            {
                                                                "id": 1020,
                                                                "text": "Chỉnh sửa",
                                                                "value": "sua",
                                                                "icon": "fa fa-key blue",
                                                                "opened": true,
                                                                "selected": false,
                                                                "disabled": false,
                                                                "loading": false,
                                                                "children": [

                                                                ]
                                                            },
                                                            {
                                                                "id": 1030,
                                                                "text": "Xóa",
                                                                "value": "xoa",
                                                                "icon": "fa fa-key blue",
                                                                "opened": true,
                                                                "selected": false,
                                                                "disabled": false,
                                                                "loading": false,
                                                                "children": [

                                                                ]
                                                            }
                                                        ]
                                                    },
                                                    {
                                                        "id": 74,
                                                        "text": "Sách tham khảo",
                                                        "value": "tieng-anh",
                                                        "icon": "",
                                                        "opened": true,
                                                        "selected": false,
                                                        "disabled": false,
                                                        "loading": false,
                                                        "children": []
                                                    }
                                                ]
                                            },
                                            {
                                                "id": 75,
                                                "text": "Tiếng Anh",
                                                "value": "tieng-anh",
                                                "icon": "",
                                                "opened": true,
                                                "selected": false,
                                                "disabled": false,
                                                "loading": false,
                                                "children": []
                                            },
                                            {
                                                "id": 11,
                                                "text": "Ngôn Ngữ Khác",
                                                "value": "ngon-ngu-khac",
                                                "icon": "",
                                                "opened": true,
                                                "selected": false,
                                                "disabled": false,
                                                "loading": false,
                                                "children": []
                                            }
                                        ]
                                    },
                                    {
                                        "id": 72,
                                        "text": "Sản Phẩm",
                                        "value": "san-pham",
                                        "icon": "fa fa-warning icon-state-danger",
                                        "opened": true,
                                        "selected": false,
                                        "disabled": false,
                                        "loading": false,
                                        "children": []
                                    },
                                    {
                                        "id": 10,
                                        "text": "Thư Viện",
                                        "value": "thu-vien",
                                        "icon": "fa fa-folder icon-state-default",
                                        "opened": true,
                                        "selected": false,
                                        "disabled": false,
                                        "loading": false,
                                        "children": [
                                            {
                                                "id": 11,
                                                "text": "Văn Học",
                                                "value": "van-hoc",
                                                "icon": "",
                                                "opened": true,
                                                "selected": false,
                                                "disabled": false,
                                                "loading": false,
                                                "children": []
                                            }
                                        ]
                                    },
                                    {
                                        "id": 12,
                                        "text": "custom icon",
                                        "value": "custom icon",
                                        "icon": "fa fa-warning icon-state-warning",
                                        "opened": true,
                                        "selected": false,
                                        "disabled": false,
                                        "loading": false,
                                        "children": []
                                    }
                                ]
                            },
                            {
                                "id": 7,
                                "text": "Lược Đồ",
                                "value": "luoc-do",
                                "icon": "",
                                "opened": true,
                                "selected": false,
                                "disabled": false,
                                "loading": false,
                                "children": [
                                    {
                                        "id": 701,
                                        "text": "Xem",
                                        "value": "xem",
                                        "icon": "fa fa-key blue",
                                        "opened": true,
                                        "selected": false,
                                        "disabled": false,
                                        "loading": false,
                                        "children": [

                                        ]
                                    },
                                    {
                                        "id": 702,
                                        "text": "Thêm mới",
                                        "value": "them-moi",
                                        "icon": "fa fa-key blue",
                                        "opened": true,
                                        "selected": false,
                                        "disabled": false,
                                        "loading": false,
                                        "children": [

                                        ]
                                    },
                                    {
                                        "id": 703,
                                        "text": "Chỉnh sửa",
                                        "value": "sua",
                                        "icon": "fa fa-key blue",
                                        "opened": true,
                                        "selected": false,
                                        "disabled": false,
                                        "loading": false,
                                        "children": [

                                        ]
                                    },
                                    {
                                        "id": 704,
                                        "text": "Xóa",
                                        "value": "xoa",
                                        "icon": "fa fa-key blue",
                                        "opened": true,
                                        "selected": false,
                                        "disabled": false,
                                        "loading": false,
                                        "children": [

                                        ]
                                    }
                                ]
                            }
                        ]
                    }
                ];
            },
            addGroup(group) {
                this.editmode = false;
                this.form.reset();
                $('#addNew').modal('show');
            },
            loadGroups() {
                axios.get('group').then(({data}) => (this.groups = data.data));
            },
            createGroup() {
                this.$Progress.start();
                this.form.post('group')
                        .then(() => {
                            Fire.$emit('AfterCreate');
                            $('#addNew').modal('hide');
                            toast({
                                type: 'success',
                                title: 'Group created successfully'
                            });
                            this.$Progress.finish();
                        })
                        .catch(() => {

                        });
            },
            updateGroup(id) {
                this.$Progress.start();
                this.form.put('group/' + this.form.id)
                        .then(() => {
                            Fire.$emit('AfterCreate');
                            $('#addNew').modal('hide');
                            toast({
                                type: 'success',
                                title: 'Group updated successfully'
                            });
                            this.$Progress.finish();
                        }).catch(() => {
                    this.$Progress.fail();
                });
            },
            deleteGroup(id) {
                swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    // Send request to server
                    if (result.value) {
                        this.form.delete('group/' + id).then(() => {
                            swal(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success'
                                    );
                            Fire.$emit('AfterCreate');
                        }).catch(() => {
                            swal('Failed!', 'There was something wrong.', 'warning');
                        });
                    }
                });
            },
            itemClick(node) {
                console.log(node.model.text + ' clicked !')
            }
        },
        created() {
            this.loadGroups();
            Fire.$on('AfterCreate', () => {
                this.loadGroups();
            });
            // setInterval(() => this.loadGroups(), 3000);
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
