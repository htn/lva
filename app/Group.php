<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'params', 'description'
    ];

    public function getMenuAttribute() {
        return '
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
        ';
    }

}
