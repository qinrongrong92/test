<?php /*a:1:{s:59:"D:\wamp64\www\tp5.1\application/admin/view\apply\apply.html";i:1557815509;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/static/admin/css/style.css">
	<link rel="stylesheet" href="/static/admin/css/bootstrap.min.css">  
	<script src="/static/admin/js/jquery.min.js"></script>
	<script src="/static/admin/js/bootstrap.min.js"></script>
	<script src="/static/admin/js/vue.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/vue"></script>
	<style type="text/css">
        table tr th {
            text-align: center;
        }
    </style>
	<title>Document</title>
</head>
<body>
	<div id="table">
		<div class="return-title">
				<ul class="breadcrumb breadcrumb-s" >
					<li class="active">应用管理</li>
				</ul>
				<div class="search-box">
					<div class="input-group input-change">
			            <input type="text" class="form-control" placeholder="请输入搜索用户名" value="<?php echo !empty($search) ? htmlentities($search) : ''; ?>" id='inputsearch'>
			            <span class="input-group-btn">
	                        <a class="btn btn-default" id='search' name='search' data-src="" @click="search()">搜索</a>
	                    </span>
			        </div>
			        <div class="add-btn">
			        	<button type="button" class="update-btn" @click="addlist=true">添加数据</button>
			        </div>
				</div>
		</div>
		<table class="table table-change table-bordered table-hover table-striped">
			<thead>
				<tr>
					<th>id</th>
					<th>名称</th>
					<th>状态</th>
					<!-- <th>code</th> -->
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				<template v-for="(item,index) in newList">
					<tr v-if="index>=(curpage-1)*pagesize&&index<curpage*pagesize">
						<th>{{item.id}}</th>
						<th>{{item.name}}</th>
						<th v-if="item.status == '1'">正常</th>
						<th v-else-if="item.status == '2'">锁定</th>
						<th v-else>冻结</th>
					<!-- 	<th>{{item.code}}</th> -->
						<th class="edit-removing">
							<a  @click="edit(item)">编辑</a>
							<sapn @click="deletelist(item.id)" class="delete-color">删除</sapn>
						</th>
					</tr>
				</template>
			</tbody>
		</table>

		<nav class="paginationNav">
			<?php echo $page; ?>
			 </nav> 

		<div class="release-article" v-if="editlist">
			<div class="status-edit">
				<div class="tilte-info">
					<p>编辑</p>
				</div>
				<form action="" class="edit-form">
					<div class="edit-padding">
						<div class="edit-title">
							<span>名称：</span>
						</div>
						<div class="edit-input">
							<input type="text" v-model="editDetail.name" name="name" value="" placeholder="美菜" >
						</div>
					</div>
					<div class="edit-padding">
						<div class="edit-title">
							<span>状态：</span>
						</div>
						<div class="edit-input">
							<select v-model="editDetail.status" name="status" > 
								<option name="status" value="1">正常</option> 
								<option name="status" value="2">锁定</option> 
								<option name="status" value="3">冻结</option> 
							</select> 
						</div>
					</div>
			<!-- 		<div class="edit-padding">
						<div class="edit-title">
							<span>code：</span>
						</div>
						<div class="edit-input">
							<input type="text" v-model="editDetail.code" name="code" value="" placeholder="code">
						</div>
					</div> -->
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
			<div class="status-edit">
				<div class="tilte-info">
					<p>添加</p>
				</div>
				<form action="" class="edit-form">
					<div class="edit-padding">
						<div class="edit-title">
							<span>名称：</span>
						</div>
						<div class="edit-input">
							<input type="text" v-model="tableData.name" name="name" value="" placeholder="请输入名称" />
						</div>
					</div>
					<div class="edit-padding">
						<div class="edit-title">
							<span>状态：</span>
						</div>
						<div class="edit-input">
							<select v-model="tableData.status" name="status" > 	  <option disabled value="">请选择状态</option> 
								<option name="status" value="1">正常</option> 
								<option name="status" value="2">锁定</option> 
								<option name="status" value="3">冻结</option> 
							</select> 
						</div>
					</div>
			<!-- 		<div class="edit-padding">
						<div class="edit-title">
							<span>code：</span>
						</div>
						<div class="edit-input">
							<input type="text" v-model="tableData.code" name="code" value="" placeholder="请输入code">
						</div>
					</div> -->
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
				<div class="status-delete" style="display: none;" id = "updatelist" >
			<div class="delete-tilte-info">
				<p>消息</p >
			</div>
			<form action="" class="delete-form">
				<div class="delete-padding">
					<span id="updatespan">更新成功</span>
				</div>
			</form>
		</div>
	</div>

<script type="text/javascript">
	var arr = eval('<?php echo json_encode($result);?>');
	var app = new Vue({
		el:"#table",
		data:{
		    editlist: false,
		    addlist:false,
	   		tableData:{"id":0,"name":"","status":""},
		    editDetail: {},
		    searchVal:'',
		    pagesize: 5,
            curpage:1,
		    newList:arr,
		    editid:''
		},
		mounted() {

	    },
	    methods: {
	    	// 添加数据
			addSubForm:function(){
				 this.editDetail = {
		          name: this.tableData.name,
		          status: this.tableData.status,
		        }
		                    //ajax向后台传递数据
		            $.ajax({
						    type: "post",
						    url:  "/admin/apply/apply_add",
						    contentType: "application/json; charset=utf-8",
						    data:JSON.stringify( this.editDetail),
						    dataType: "json",
						    success: function (data) {
						       if(data == 1)
						       {
							       document.getElementById('updatespan').innerText="添加成功"
							       var obj=document.getElementById('updatelist')
							       obj.style.display = "block"
							       var t=setTimeout("location.reload()",2000);
						       	// window.location.reload()
						       }else{
						       		document.getElementById('updatespan').innerText="添加失败"
						       		var obj=document.getElementById('updatelist')
						       		obj.style.display = "block"
						       		var t=setTimeout("location.reload()",2000);
						       }
						    },
						    error: function (message) {
						        //失败信息
						    }
						});
                this.addlist=false
            },
	      //编辑
		    edit(item) {
		        this.editDetail = {
		          name: item.name,
		          status: item.status,
		          code:item.code
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
		              name: _this.editDetail.name,
		              status: _this.editDetail.status,
		              id: this.editid
		            }
		            //
		             //ajax向后台传递数据
		            $.ajax({
						    type: "post",
						    url:  "/admin/apply/apply_edit",
						    contentType: "application/json; charset=utf-8",
						    data:JSON.stringify(_this.newList[this.editid-1]),
						    dataType: "json",
						    success: function (data) {
						       if(data == 1)
						       {
						       var obj=document.getElementById('updatelist')
						       obj.style.display = "block"
						       var t=setTimeout("location.reload()",2000);
						       	// window.location.reload()
						       }else{
						       	 document.getElementById('updatespan').innerText="更新失败"
						       	var obj=document.getElementById('updatelist')
						       	obj.style.display = "block"
						       var t=setTimeout("location.reload()",2000);
						       }
						    },
						    error: function (message) {
						        //失败信息
						    }
						});
		            //
		            this.editlist = false
		          }
		        }
      		},
      		//删除
			deletelist(item) {
				let _this= this
				var id = item
			    $.ajax({
					    type: "get",
					    url:  "/admin/apply/apply_delete?id="+id,
					    contentType: "application/json; charset=utf-8",
					    dataType: "json",
					    success: function (data) {
					       if(data == 1)
					       {
						       document.getElementById('updatespan').innerText="删除成功"
						       var obj=document.getElementById('updatelist')
						       obj.style.display = "block"
						       var t=setTimeout("location.reload()",2000);
					       	// window.location.reload()
					       }else{
					       	 	document.getElementById('updatespan').innerText="删除失败"
						       	var obj=document.getElementById('updatelist')
						       	obj.style.display = "block"
						       var t=setTimeout("location.reload()",2000);
					       }
					    },
					    error: function (message) {
					        //失败信息
					    }
					});
			},
			search() {
				var name = document.getElementById('inputsearch').value
				
				document.getElementById('search').href="../apply/apply?name="+name
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
	   //  computed:{
	   //    list: function(){
	   //      var _this = this;
	   //      var arrByZM = [];
	   //      for (var i=0;i<this.newList.length;i++){
	   //      if(this.newList[i].name.search(this.searchVal) != -1){
	   //      arrByZM.push(this.newList[i]);
	   //      }
	   //    }
	   //    return arrByZM;
	   //    }
	  	// },
	    ready:function(){
           var s = JSON.stringify(this.newList);
           console.log(JSON.parse(s))
        }
	})
</script>
</body>
</html>