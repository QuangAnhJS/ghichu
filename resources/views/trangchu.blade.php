@extends('header')
@section('content')
<div class="root">
    <div class="container">
        <div class="row">
            <div class="col-xl-3"></div>
            <div class="col-xl-6">
                <div class="row">
                    <div class="col-6 pt-5">
                        <div class="row">
                            <div class="col-2"><img src="/public/asset/img/logo-1.svg" alt="" width="35px"></div>
                            <div class="col-10">
                                <h3>My Task Board <span><img src="/public/asset/img/edit-duotone-1.svg" alt="" width="20px"></span></h3>
                                <p class="fs-6">Tasks to keep organised</p>
                            </div>

                        </div>

                    </div>
                    <div class="col-6"></div>
                </div>
                <div id="display">
                </div>


                <div class="row pt-3">
                    <div class="Progress">
                        <div class="row p-2 ">
                            <div class="col-2">
                                <button class="boc" data-bs-toggle="modal" data-bs-target="#slideInModal">
                                    <img class="custom-img" src="/public/asset/img/addroundduotone1-1.svg" alt="" width="40px">
                                </button>
                            </div>
                            <div class="col-8 p-3">
                                <p class="fs-5 padding-0">Tasks to keep Progress</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3"></div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade slide-in " id="slideInModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg m-3">
        <div class="modal-content border">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Task details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="">
                    <label class="form-label">Task name</label>
                    <input type="text" class="form-control custom-outline" id="name">

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Description</label>
                    <textarea class="form-control custom-outline" name="" id="Description" placeholder="Enter a short description"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Icon</label><br>
                    <div class="mb-3">
                        <input type="checkbox" class="checkbox1" name="option" id="icon1" value="1">
                        <input type="checkbox" class="checkbox2" name="option" id="icon2" value="2">
                        <input type="checkbox" class="checkbox3" name="option" id="icon3" value="3">


                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Status</label><br>
                    <div class="row">
                        <div class="col-6">
                            <div class="boc-status p-2">
                                <div class="row">
                                    <div class="col-2">
                                        <div class="boc-img"> <img src="/public/asset/img/Time_atack_duotone.svg" width="30px"></div>

                                    </div>
                                    <div class="col-8 p-2">
                                        <p class="fs-6 ms-2">In Progress</p>
                                    </div>
                                    <div class="col-2 p-2"> <input type="checkbox" name="status" class="check" id="status1" value="s1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="boc-status p-2">
                                <div class="row">
                                    <div class="col-2">
                                        <div class="boc-img" style="background-color: #32D657;"> <img src="/public/asset/img/Done_round_duotone.svg" width="30px"></div>

                                    </div>
                                    <div class="col-8 p-2">
                                        <p class="fs-6 ms-2">In Progress</p>
                                    </div>
                                    <div class="col-2 p-2"> <input type="checkbox" name="status" class="check" id="status2" value="s2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            <div class="boc-status p-2">
                                <div class="row">
                                    <div class="col-2">
                                        <div class="boc-img" style="background-color: #DD524C;"> <img src="/public/asset/img/close_ring_duotone-1.svg" width="30px"></div>

                                    </div>
                                    <div class="col-8 p-2">
                                        <p class="fs-6 ms-2">In Progress</p>
                                    </div>
                                    <div class="col-2 p-2"> <input type="checkbox" name="status" class="check" id="status3" value="s3"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">

                <button type="button" id="submit" class="btn btn-primary costum-save"><span class="">Save</span><i class="fa-solid fa-check ms-2"></i></button>
            </div>
        </div>
    </div>
</div>
<!-- modal update -->
<div class="modal fade slide-in " id="model-update" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg m-3">
        <div class="modal-content border">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Task details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="">
                    <label class="form-label">Task name</label>
                    <input type="text" class="form-control custom-outline" id="update-name">

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Description</label>
                    <textarea class="form-control custom-outline" name="" id="update-Description" placeholder="Enter a short description"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Icon</label><br>
                    <div class="mb-3">
                        <input type="checkbox" class="checkbox1" name="update-option" id="icon1" value="1">
                        <input type="checkbox" class="checkbox2" name="update-option" id="icon2" value="2">
                        <input type="checkbox" class="checkbox3" name="update-option" id="icon3" value="3">

                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Status</label><br>
                    <div class="row">
                        <div class="col-6">
                            <div class="boc-status p-2">
                                <div class="row">
                                    <div class="col-2">
                                        <div class="boc-img"> <img src="/public/asset/img/Time_atack_duotone.svg" width="30px"></div>

                                    </div>
                                    <div class="col-8 p-2">
                                        <p class="fs-6 ms-2">In Progress</p>
                                    </div>
                                    <div class="col-2 p-2"> <input type="checkbox" name="update-status" class="check" id="status1" value="s1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="boc-status p-2">
                                <div class="row">
                                    <div class="col-2">
                                        <div class="boc-img" style="background-color: #32D657;"> <img src="/public/asset/img/Done_round_duotone.svg" width="30px"></div>

                                    </div>
                                    <div class="col-8 p-2">
                                        <p class="fs-6 ms-2">In Progress</p>
                                    </div>
                                    <div class="col-2 p-2"> <input type="checkbox" name="update-status" class="check" id="status2" value="s2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            <div class="boc-status p-2">
                                <div class="row">
                                    <div class="col-2">
                                        <div class="boc-img" style="background-color: #DD524C;"> <img src="/public/asset/img/Done_round_duotone.svg" width="30px"></div>

                                    </div>
                                    <div class="col-8 p-2">
                                        <p class="fs-6 ms-2">In Progress</p>
                                    </div>
                                    <div class="col-2 p-2"> <input type="checkbox" name="update-status" class="check" id="status3" value="s3"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary costum-delete"><span class="" id="delete">Delete</span><i class="fa-solid fa-trash-can ms-2"></i></button>
                <button type="button" id="Update" class="btn btn-primary costum-save"><span class="">Update</span><i class="fa-solid fa-check ms-2"></i></button>
            </div>
        </div>
    </div>
</div>
<script>
    const displays = (message) => {

        const display = document.getElementById('display');
        display.innerHTML = '';

        message.forEach(item => {
            let icon = item.icon;
            let status = item.status;
            let iconStatus;
            let colors;
            let background;
            let img;
            switch (icon) {
                case '1':
                    img = '/public/asset/img/rectangle-20@2x.png';
                    break;
                case '2':
                    img = '/public/asset/img/rectangle-11@2x.png';
                    break;
                case '3':
                    img = '/public/asset/img/rectangle-22@2x.png';
                    break;
                case '4':
                    img = '/public/asset/img/rectangle-24@2x.png';
                    break;
                default:
                    break;

            }
            switch (status) {
                case 's1':
                    iconStatus = '/public/asset/img/Time_atack_duotone.svg';
                    colors = '#E9A23B';
                    background = '#F5D565';
                    break;
                case 's2':
                    iconStatus = '/public/asset/img/Done_round_duotone.svg';
                    colors = '#32D657';
                    background = '#A0ECB1';
                    break;
                case 's3':
                    iconStatus = '/public/asset/img/close_ring_duotone-1.svg';
                    colors = '#DD524C';
                    background = '#F7D4D3';
                    break;
                default:
                    break;
            }
            const taskDiv = document.createElement('div');
            taskDiv.className = 'row pt-3';
            taskDiv.innerHTML = `   <div class="Progress" style="background-color:${background};">
                        <div class="row p-2 ">
                            <div class="col-2">
                                <img class="custom-img" src="${img}" alt="" width="40px">
                            </div>
                            <div class="col-8">
                                <p class="fs-5 padding-0">${item.name}</p>
                                // <p class="fs-6 padding-0">${item.description}</p>
                            </div>
                            <div class="col-2">
                                <button class="boc" style="background-color:${colors};" data-bs-toggle="modal"  onclick="open_modal(${item.id})" id="open-modal">
                                    <img class="custom-img" src="${iconStatus}" alt="" width="40px">
                                </button>

                            </div>
                        </div>
                    </div>`

            display.appendChild(taskDiv);
        })
    }
    const update = (id) => {
        let name = document.querySelector('#update-name').value;
        let Description = document.querySelector('#update-Description').value;
        let icons = document.querySelectorAll('input[type="checkbox"][name="update-option"]');
        let icon = null;
        icons.forEach(item => {
            if (item.checked) {
                icon = item.value;
                return;
            }
        });
        let status = document.querySelectorAll('input[type="checkbox"][name="update-status"]');
        let selectStatus = null;
        status.forEach(item => {
            if (item.checked) {
                selectStatus = item.value;
                return; //
            }
        });

        if (!name || !Description || !icon || !selectStatus) {
            Swal.fire({
                icon: "error",
                title: "Vui lòng chọn đầy đủ thông tin !",
            });

            return;
        }

        fetch('api/Update_ghichu', {
                method: 'post',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    id: id,
                    name: name,
                    description: Description,
                    icon: icon,
                    status: selectStatus,
                })
            })
            .then(response => response.json())
            .then(async data => {
                if (data.status == "success") {
                    await Swal.fire({
                        icon: "success",
                        title: data.message,
                    });
                    location.reload();
                } else if (data.status == "error") {
                    await Swal.fire({
                        icon: "error",
                        title: data.message,
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Update failed');
            })
            .finally(() => {
                // location.reload();
            });
    }

    const Delete = (id) => {
        Swal.fire({
            title: "Bạn thực sự muốn xóa?",
            text: "Sau khi xóa bạn không thể nào khôi phục lại dữ liệu",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                fetch('api/Delete', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify({
                            id: id
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === 'success') {
                            Swal.fire({
                                title: 'Deleted!',
                                text: 'Your file has been deleted.',
                                icon: 'success'
                            }).then(() => {
                                location.reload(); // Làm mới trang sau khi thông báo thành công
                            });
                        } else {
                            Swal.fire({
                                title: 'Error!',
                                text: 'Xóa thất bại!',
                                icon: 'error'
                            });
                        }
                    })
                    .catch(error => {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Đã xảy ra lỗi trong quá trình xóa!',
                            icon: 'error'
                        });
                        console.error('Error:', error);
                    });
            }
        });
    }
    const getID = (id) => {

        fetch('api/GetID', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Cache-Control': 'no-cache'
                },
                body: JSON.stringify({
                    id: id
                })
            })
            .then(response => response.json())
            .then(data => {
                let message = data.message;
                document.getElementById('update-name').value = message.name;
                document.getElementById('update-Description').value = message.description;
                let icon = message.icon;
                const checkbox = document.querySelectorAll('input[type="checkbox"][name="update-option"]');
                checkbox.forEach(checkbox => {
                    checkbox.checked = (checkbox.value === icon);
                });
                let status = message.status;
                const checkbox_status = document.querySelectorAll(
                    'input[type="checkbox"][name="update-status"]');
                checkbox_status.forEach(checkbox => {
                    checkbox.checked = (checkbox.value === status);
                })

                document.getElementById('delete').addEventListener('click', () => {
                    let id = message.id;
                    Delete(id);
                })
                document.getElementById('Update').addEventListener('click', () => {
                    let id = message.id;
                    update(id);
                })
            })
            .catch(error => {
                console.log('Error fetching data:', error);
            });
    }
    const open_modal = (id) => {
        const modal = document.getElementById("model-update");
        const objectModal = new bootstrap.Modal(modal);
        modal.addEventListener('show.bs.modal', event => {
            getID(id);
        });
        // Định nghĩa hàm getID

        objectModal.show();
        document.getElementById('delete').addEventListener('delete', (id) => {

        })
    }

    document.addEventListener('DOMContentLoaded', () => {
        getdata();
    });
    const getdata = () => {
        fetch('api/GetData', {
                method: 'get',
                headers: {
                    'Content-Type': 'application/json',
                },
            })
            .then(response => response.json())
            .then(data => {
                const message = data.message
                displays(message);
            })
            .catch(error => {
                console.log('error', error);
            });
    }
    const checkStatus = document.querySelectorAll('input[type="checkbox"][name="status"]');
    checkStatus.forEach(
        check => {
            check.addEventListener('change', () => {
                if (check.checked) {
                    checkStatus.forEach(otherCheckbox => {
                        if (otherCheckbox !== check) {
                            otherCheckbox.checked = false;
                        }
                    });
                }
            });
        });

    const checkboxes = document.querySelectorAll('input[type="checkbox"][name="option"]');

    checkboxes.forEach(check => {
        check.addEventListener('change', () => {
            if (check.checked) {
                checkboxes.forEach(otherCheckbox => {
                    if (otherCheckbox !== check) {
                        otherCheckbox.checked = false;
                    }
                });
            }
        });
    });
    document.getElementById('submit').addEventListener('click', function() {
        let name = document.querySelector('#name').value;
        let Description = document.querySelector('#Description').value;
        let icons = document.querySelectorAll('input[type="checkbox"][name="option"]')
        let icon;
        icons.forEach(item => {
            if (item.checked) {
                icon = item.value;
                return icon;
            }
        })
        let status = document.querySelectorAll('input[type="checkbox"][name="status"]');
        let selectStatus;
        status.forEach(item => {
            if (item.checked) {
                selectStatus = item.value;
                return selectStatus;
            }
        })

        if (!name || !Description || !icon || !status) {
            Swal.fire({
                icon: "error",
                title: "Vui lòng chọn đầy đủ thông tin !",
            })
            console.log('icon', icon);
        }
        fetch('api/create-ghichu', {
                method: 'post',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    name: name,
                    description: Description,
                    icon: icon,
                    status: selectStatus,
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === "success") {
                    Swal.fire({
                        icon: "success",
                        title: data.message,
                    });
                } else if (data.status === "error") {
                    Swal.fire({
                        icon: "error",
                        title: data.message,
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Login failed');

            })
            .finally(() => {
                location.reload();
            });

    })
</script>
@endsection