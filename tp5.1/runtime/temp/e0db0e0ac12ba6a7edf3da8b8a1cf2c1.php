<?php /*a:1:{s:62:"D:\wamp64\www\tp5.1\application/admin/view\horseman\index.html";i:1557112140;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="/tp5.1/public/static/admincss/style.css">
	<link rel="stylesheet" href="/tp5.1/public/static/admincss/bootstrap.min.css">
	<script src="/tp5.1/public/static/adminjs/jquery.min.js"></script>
	<script src="/tp5.1/public/static/adminjs/vue.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <style type="text/css">
        table tr th {
            text-align: center;
        }
    </style>
</head>
<body>
    <div id="table">
    	<div class="return-title">
			<ul class="breadcrumb breadcrumb-s" >
				<li><a href="#">骑手管理</a></li>
				<li class="active">全部</li>
			</ul>
			<div class="search-box">
				<div class="input-group input-change">
		            <input type="text" class="form-control" placeholder="请输入搜索用户名" v-model="searchVal">
		            <span class="input-group-btn">
                        <button class="btn btn-default" type="button">搜索</button>
                    </span>
		        </div>
		        <div class="add-btn">
		        	<button type="button" class="update-btn" @click="addlist=true">添加数据</button>
		        </div>
			</div>
		</div>
        <table class="table table-change table-bordered table-hover">
            <thead>
                <tr>
                    <th>id</th>
					<th>用户名</th>
					<th>名称</th>
					<th>性别</th>
					<th>所属区域</th>
					<th>账户状态</th>
					<th>配送状态</th>
					<th>操作</th>
                </tr>
            </thead>
            <tbody>
                <template v-for="(item,index) in list">
                    <tr v-if="index>=(curpage-1)*pagesize&&index<curpage*pagesize">
                        <th>{{index+1}}</th>
						<th>{{item.user}}</th>
						<th>{{item.name}}</th>
						<th>{{item.sex}}</th>
						<th>{{item.region}}</th>
						<th>{{item.accountStatus}}</th>
						<th>{{item.deliveryStatus}}</th>
						<th class="edit-removing">
							<a @click="status(item)">实时状态</a>
							<a class="history" data-id="history" >配送历史</a>
							<a @click="edit(item)">编辑</a>
							<span class="delete-color" @click="deletelist(item.id,index)">删除</span>
						</th>
                    </tr>
                </template>
            </tbody>
        </table>

        <nav class="paginationNav">
            <ul class="pagination pagination-xl">
                <template v-for="page in Math.ceil(list.length/pagesize)">
                    <li v-on:click="PrePage()" id="prepage" v-if="page==1" class="disabled"><a href="#">上一页</a></li>
                    <li v-if="page==1" class="active" v-on:click="NumPage(page, $event)"><a href="#">{{page}}</a></li>
                    <li v-else v-on:click="NumPage(page, $event)"><a href="#">{{page}}</a></li>
                    <li id="nextpage" v-on:click="NextPage()" v-if="page==Math.ceil(list.length/pagesize)"><a href="#">下一页</a></li>
                </template>
            </ul>
        </nav>

        <div class="release-article" v-if="statuslist">
			<div class="status-edit">
				<div class="tilte-info">
					<p>配送状态</p>
				</div>
				<form action="" class="edit-form">
					<div class="edit-padding">
						<div class="edit-title">
							<span>所在位置：</span>
						</div>
						<div class="edit-input">
							<input type="text" v-model="statusDetail.riderPosition" name="riderPosition" value=""  disabled="disabled">
						</div>
					</div>
					<div class="edit-padding">
						<div class="edit-title">
							<span>配送订单：</span>
						</div>
						<div class="edit-input">
							<input type="text" v-model="statusDetail.deliveryOrder" name="deliveryOrder" value=""  disabled="disabled">
						</div>
					</div>
					<div class="edit-padding">
						<div class="edit-title">
							<span>时间：</span>
						</div>
						<div class="edit-input">
							<input type="text" v-model="statusDetail.deliveryTime" name="deliveryTime" value=""  disabled="disabled">
						</div>
					</div>
					<div class="edit-padding">
						<div class="edit-title">
							<span>状态：</span>
						</div>
						<div class="edit-input">
							<input type="text" v-model="statusDetail.riderstatus" name="riderstatus" value=""  disabled="disabled">
						</div>
					</div>
					<div class="edit-padding" style="text-align: center;">
						    <button type="button" class="update-btn" @click="statuslist=false">取消</button>
					</div>
				</form>
			</div>
		</div>

        <div class="release-article" v-if="editlist">
			<div class="status-edit">
				<div class="tilte-info">
					<p>编辑</p>
				</div>
				<form action="" class="edit-form">
					<div class="edit-padding">
						<div class="edit-title">
							<span>用户名：</span>
						</div>
						<div class="edit-input">
							<input type="text" v-model="editDetail.user" name="user" value="" placeholder="张三" disabled="disabled">
						</div>
					</div>
					<div class="edit-padding">
						<div class="edit-title">
							<span>名称：</span>
						</div>
						<div class="edit-input">
							<input type="text" v-model="editDetail.name" name="name" value="" placeholder="user" >
						</div>
					</div>
					<div class="edit-padding">
						<div class="edit-title">
							<span>性别：</span>
						</div>
						<div class="edit-input">
							<select v-model="editDetail.sex" name="sex" value=""> 
							<option name="sex">男</option> 
							<option name="sex">女</option> 
							</select> 
						</div>
					</div>
					<div class="edit-padding">
						<div class="edit-title">
							<span>所属区域：</span>
						</div>
						<div class="edit-input">
							<select v-model="editDetail.region" name="region" value=""> 
							<option name="region">城中区</option> 
							<option name="region">柳北区</option> 
							<option name="region">鱼峰区</option> 
							<option name="region">柳南区</option> 
							</select> 
						</div>
					</div>
					<div class="edit-padding">
						<div class="edit-title">
							<span>账户状态：</span>
						</div>
						<div class="edit-input">
							<select v-model="editDetail.accountStatus" name="accountStatus" value=""> 
								<option name="accountStatus">正常</option> 
								<option name="accountStatus">锁定</option> 
								<option name="accountStatus">冻结</option> 
							</select> 
						</div>
					</div>
					<div class="edit-padding">
						<div class="edit-title">
							<span>配送状态：</span>
						</div>
						<div class="edit-input">
							<select v-model="editDetail.deliveryStatus" name="deliveryStatus" value=""> 
								<option name="deliveryStatus">待接单</option> 
								<option name="deliveryStatus">待取货</option> 
								<option name="deliveryStatus">配送中</option> 
							</select> 
						</div>
					</div>
					<div class="edit-padding">
						<div class="update">
						    <button type="button" class="update-btn" @click="update">更新</button>
						</div>
						<div class="cancel">
						    <button type="button" class="update-btn" @click="editlist=false">取消</button>
						</div>
					</div>
				</form>
			</div>
		</div> 

		<div class="release-article" v-if="addlist">
			<div class="status-edit status-top">
				<div class="tilte-info">
					<p>添加</p>
				</div>
				<form action="" class="edit-form">
					<div class="edit-padding">
						<div class="edit-title">
							<span>用户名：</span>
						</div>
						<div class="edit-input">
							<input type="text" v-model="tableData.user" name="user" value="" placeholder="请输入用户名" />
						</div>
					</div>
					<div class="edit-padding">
						<div class="edit-title">
							<span>名称：</span>
						</div>
						<div class="edit-input">
							<input type="text" v-model="tableData.name" name="name" value="" placeholder="请输入名称">
						</div>
					</div>
					<div class="edit-padding">
						<div class="edit-title">
							<span>性别：</span>
						</div>
						<div class="edit-input">
							<select v-model="tableData.sex" name="sex" value=""> 
								<option disabled value="">请选择性别</option> 
								<option name="sex">男</option> 
								<option name="sex">女</option> 
							</select> 
						</div>
					</div>
					<div class="edit-padding">
						<div class="edit-title">
							<span>所属区域：</span>
						</div>
						<div class="edit-input">
							<select v-model="tableData.region" name="region" value=""> 	  <option disabled value="">请选择区域</option> 
								<option name="region">城中区</option> 
								<option name="region">柳北区</option> 
								<option name="region">鱼峰区</option> 
								<option name="region">柳南区</option> 
							</select> 
						</div>
					</div>
					<div class="edit-padding">
						<div class="edit-title">
							<span>账户状态：</span>
						</div>
						<div class="edit-input">
							<select v-model="tableData.accountStatus" name="accountStatus" value=""> 
								<option disabled value="">请选择账户状态</option> 
								<option name="accountStatus">正常</option> 
								<option name="accountStatus">锁定</option> 
								<option name="accountStatus">冻结</option> 
							</select> 
						</div>
					</div>
					<div class="edit-padding">
						<div class="edit-title">
							<span>配送状态：</span>
						</div>
						<div class="edit-input">
							<select v-model="tableData.deliveryStatus" name="deliveryStatus" value=""> 
								<option disabled value="">请选择配送状态</option> 
								<option name="deliveryStatus">待接单</option> 
								<option name="deliveryStatus">待取货</option> 
								<option name="deliveryStatus">配送中</option> 
							</select> 
						</div>
					</div>
					<div class="edit-padding">
						<div class="update">
						    <button type="button" class="update-btn" @click="addSubForm">添加</button>
						</div>
						<div class="cancel">
						    <button type="button" class="update-btn" @click="addlist=false">取消</button>
						</div>
					</div>
				</form>
			</div>
		</div> 

    </div>

<script>
    $(function() {
        $(".history").on("click", function() {
            var sId = $(this).data("id"); //获取data-id的值
            window.location.hash = sId; //设置锚点
            loadInner();
        });
 
        function loadInner() {
            var sId = window.location.hash;
            var pathn, i;
            switch(sId) {
                case "#history":
                    pathn = "deliveryHistory.html";
                    i = 0;
                    break;
                default:
                    pathn = "deliveryHistory.html";
                    i = 0;
                    break;
            }
            $("#table").load(pathn); //加载相对应的内容
            // $(".sidebar-menu li").eq(i).addClass("current").siblings().removeClass("current"); //当前列表高亮
        }
        var sId = window.location.hash;
        // loadInner();
    });
</script>

<script type="text/javascript">
    //Model
    var data = {
    	editlist: false,
	    statuslist: false,
	    addlist:false,
	   	tableData:{"id":0,"user":"","name":"","sex":"","region":"","accountStatus":"","deliveryStatus":""},
	    editDetail: {},
	    statusDetail: {},
        newList: [
            {
		    	id:'1',
		    	user:'张三',
		    	name:'user',
		    	sex:'男',
		    	region:'城中区',
		    	accountStatus:'正常',
		    	deliveryStatus:'待接单',
		    	riderPosition:'柳南区',
		    	deliveryOrder:'123456789',
		    	deliveryTime:'2019.04.25',
		    	riderstatus:'已完成'
		    }
		    ,{
		    	id:'2',
		    	user:'李四',
		    	name:'85de',
		    	sex:'男',
		    	region:'柳北区',
		    	accountStatus:'锁定',
		    	deliveryStatus:'配送中',
		    	riderPosition:'柳南区',
		    	deliveryOrder:'123456789',
		    	deliveryTime:'2019.04.25',
		    	riderstatus:'待取货'
		    },{
		    	id:'3',
		    	user:'王五',
		    	name:'df55',
		    	sex:'男',
		    	region:'鱼峰区',
		    	accountStatus:'正常',
		    	deliveryStatus:'待接单',
		    	riderPosition:'柳南区',
		    	deliveryOrder:'123456789',
		    	deliveryTime:'2019.04.25',
		    	riderstatus:'待接单'
		    },{
		    	id:'4',
		    	user:'陈丽',
		    	name:'365d',
		    	sex:'女',
		    	region:'柳南区',
		    	accountStatus:'正常',
		    	deliveryStatus:'配送中',
		    	riderPosition:'柳南区',
		    	deliveryOrder:'123456789',
		    	deliveryTime:'2019.04.25',
		    	riderstatus:'配送中'
		    },{
		    	id:'5',
		    	user:'陈丽',
		    	name:'365d',
		    	sex:'女',
		    	region:'柳南区',
		    	accountStatus:'冻结',
		    	deliveryStatus:'待接单',
		    	riderPosition:'柳南区',
		    	deliveryOrder:'123456789',
		    	deliveryTime:'2019.04.25',
		    	riderstatus:'待取货'
		    },{
		    	id:'6',
		    	user:'陈丽',
		    	name:'365d',
		    	sex:'女',
		    	region:'柳南区',
		    	accountStatus:'正常',
		    	deliveryStatus:'配送中',
		    	riderPosition:'柳南区',
		    	deliveryOrder:'123456789',
		    	deliveryTime:'2019.04.25',
		    	riderstatus:'待接单'
		    },{
		    	id:'7',
		    	user:'陈丽',
		    	name:'365d',
		    	sex:'女',
		    	region:'柳南区',
		    	accountStatus:'冻结',
		    	deliveryStatus:'待取货',
		    	riderPosition:'柳南区',
		    	deliveryOrder:'123456789',
		    	deliveryTime:'2019.04.25',
		    	riderstatus:'待取货'
		    },{
		    	id:'8',
		    	user:'陈丽',
		    	name:'365d',
		    	sex:'女',
		    	region:'柳南区',
		    	accountStatus:'锁定',
		    	deliveryStatus:'待接单',
		    	riderPosition:'柳南区',
		    	deliveryOrder:'123456789',
		    	deliveryTime:'2019.04.25',
		    	riderstatus:'待接单'
		    },{
		    	id:'9',
		    	user:'陈丽',
		    	name:'365d',
		    	sex:'女',
		    	region:'柳南区',
		    	accountStatus:'锁定',
		    	deliveryStatus:'待取货',
		    	riderPosition:'柳南区',
		    	deliveryOrder:'123456789',
		    	deliveryTime:'2019.04.25',
		    	riderstatus:'已完成'
		    },{
		    	id:'10',
		    	user:'陈丽',
		    	name:'365d',
		    	sex:'女',
		    	region:'柳南区',
		    	accountStatus:'正常',
		    	deliveryStatus:'待接单',
		    	riderPosition:'柳南区',
		    	deliveryOrder:'123456789',
		    	deliveryTime:'2019.04.25',
		    	riderstatus:'配送中'
		    },{
		    	id:'11',
		    	user:'陈丽',
		    	name:'365d',
		    	sex:'女',
		    	region:'柳南区',
		    	accountStatus:'锁定',
		    	deliveryStatus:'待取货',
		    	riderPosition:'柳南区',
		    	deliveryOrder:'123456789',
		    	deliveryTime:'2019.04.25',
		    	riderstatus:'已完成'
		    }
        ],
        searchVal:'',
        pagesize: 5,
        curpage:1,//当前页的页码
        editid:''
    };
    //ViewModel
    var vue = new Vue({
        el: '#table',
        data: data,
        mounted() {

	    },
        methods: {
        	// 添加数据
			addSubForm:function(){
                this.tableData.id = this.newList.length + 1;
                this.newList.push(this.tableData);
                this.tableData = { };
                this.addlist=false
            },
        	status(item) {
		        this.statusDetail = {
		          riderPosition:item.riderPosition,
		          deliveryOrder: item.deliveryOrder,
		          deliveryTime: item.deliveryTime,
		          riderstatus: item.riderstatus,
		        }
		        this.statuslist = true
		        this.editid = item.id
		    },
		    // 编辑
        	edit : function(item) {
		        this.editDetail = {
		          user:item.user,
		          name: item.name,
		          sex: item.sex,
		          region: item.region,
		          accountStatus: item.accountStatus,
		          deliveryStatus: item.deliveryStatus
		        }
		        this.editlist = true
		        this.editid = item.id
		    },
		    // 更新
		    update() {
        		let _this= this
		        for(let i = 0; i < _this.newList.length; i++) {
		          if(_this.newList[i].id ==this.editid) {
		            _this.newList[i] = {
		              user:_this.editDetail.user,
		              name: _this.editDetail.name,
		              sex: _this.editDetail.sex,
		              region: _this.editDetail.region,
		              accountStatus: _this.editDetail.accountStatus,
		              deliveryStatus: _this.editDetail.deliveryStatus,
		              // dates: _this.editDetail.dates,
		              id: this.editid
		            }
		            this.editlist = false
		          }
		        }
      		},
      		//删除
			deletelist(id, i) {
				this.newList.splice(i, 1)
			},

            //上一页方法
            PrePage: function (event) 
            {
                $(".pagination .active").prev().trigger("click");
            },
            //下一页方法
            NextPage: function (event) {
                $(".pagination .active").next().trigger("click");
            },
            //点击页码的方法
            NumPage: function (num, event) {
                if (this.curpage == num) {
                    return;
                }
                this.curpage = num;
                $(".pagination li").removeClass("active");
                if (event.target.tagName.toUpperCase() == "LI") {
                    $(event.target).addClass("active");
                }
                else {
                    $(event.target).parent().addClass("active");
                }
                if (this.curpage == 1) {
                    $("#prepage").addClass("disabled");
                }
                else {
                    $("#prepage").removeClass("disabled");
                }
                if (this.curpage == Math.ceil(this.list.length / this.pagesize)) {
                    $("#nextpage").addClass("disabled");
                }
                else {
                    $("#nextpage").removeClass("disabled");
                }
            }
        },
        computed:{
	      list: function(){
	        var _this = this;
	        var arrByZM = [];
	        for (var i=0;i<this.newList.length;i++){
	        if(this.newList[i].user.search(this.searchVal) != -1){
	        arrByZM.push(this.newList[i]);
	        }
	      }
	      return arrByZM;
	      }
	  	},
        ready:function(){
           var s = JSON.stringify(this.newList);
           console.log(JSON.parse(s))
        }
    });
</script>
</body>
 
</html>