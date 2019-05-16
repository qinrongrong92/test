<?php /*a:1:{s:59:"D:\wamp64\www\tp5.1\application/admin/view\order\order.html";i:1557815456;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/static/admin/css/style.css">
	<link rel="stylesheet" href="/static/admin/css/bootstrap.min.css">  
	<script src="/static/admin/js/jquery.min.js"></script>
	<script src="/static/admin/js/bootstrap.min.js"></script>
	<script src="/static/admin/js/vue.min.js"></script>
	<script type="text/javascript" src="/static/admin/js/vue.min.js"></script>
	<style type="text/css">
        table tr th {
            text-align: center;
        }
    </style>
	<title>Document</title>
</head>
<body>
	<div style="padding:20px;" id="table">
		<div class="return-title">
				<ul class="breadcrumb breadcrumb-s" >
					<li><a href="#">订单管理</a></li>
					<li class="active">全部</li>
				</ul>
				<div class="search-box">
					<div class="input-group input-change">
			            <input type="text" class="form-control" placeholder="请输入搜索订单号" value="<?php echo !empty($search) ? htmlentities($search) : ''; ?>" id='inputsearch'>
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
					<th>配送id</th>
					<th>订单id</th>
					<th>所属区域</th>
					<th>来源地</th>
					<th>目的地</th>
					<th>所属应用</th>
					<th>状态</th>
					<th>创建时间</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>	
				 <template v-for="(item,index) in newList">
					<tr v-if="index>=(curpage-1)*pagesize&&index<curpage*pagesize">
						<th>{{item.id}}</th>
						<th>{{item.orderid}}</th>
						<th>{{item.name_cn}}{{item.areaname}}</th>
						<th>{{item.from}}</th>
						<th>{{item.to}}</th>
						<th>{{item.name}}</th>
						<th>{{item.statusNameCn}}</th>
						<th>{{item.createtime}}</th>
						<th class="edit-removing">
							<a href="#" @click="edit(item)">实时状态</a>
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
				<form class="edit-form">
					<div class="edit-padding">
						<div class="edit-title">
							<span>骑手id：</span>
						</div>
						<div class="edit-input">
							<input type="text" v-model="editDetail.riderId" name="riderId" value="" placeholder="12465" disabled="disabled">
						</div>
					</div>
					<div class="edit-padding">
						<div class="edit-title">
							<span>位置：</span>
						</div>
						<div class="edit-input">
							<input type="text" v-model="editDetail.position" name="position" value="" placeholder="125846544654" disabled="disabled" >
						</div>
					</div>
					<div class="edit-padding">
						<div class="edit-title">
							<span>状态：</span>
						</div>
						<div class="edit-input">
							<input type="text" v-model="editDetail.riderStatus" name="riderStatus" value="" placeholder="" disabled="disabled">
						</div>
					</div>
					<div class="edit-padding" style="text-align: center;">
						<button type="button" class="update-btn" @click="editlist=false">确定</button>
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
							<span>配送id：</span>
						</div>
						<div class="edit-input">
							<input type="number" v-model="tableData.deliveryId" name="deliveryId" value="" placeholder="请输入配送id" />
						</div>
					</div>
					<div class="edit-padding">
						<div class="edit-title">
							<span>订单id：</span>
						</div>
						<div class="edit-input">
							<input type="number" v-model="tableData.orderid" name="orderid" value="" placeholder="请输入订单id">
						</div>
					</div>
					<div class="edit-padding">
						<div class="edit-title">
							<span>所属店铺：</span>
						</div>
						<div class="edit-input">
							<input type="text" v-model="tableData.shop" name="shop" value="" placeholder="请输入所属店铺">
						</div>
					</div>
					<div class="edit-padding">
						<div class="edit-title">
							<span>所属区域：</span>
						</div>
						<div class="edit-input">
							<select v-model="tableData.region" name="region" value="">    <option disabled value="">请选择所属区域</option> 
								<option name="region">城中区</option> 
								<option name="region">柳北区</option> 
								<option name="region">鱼峰区</option> 
								<option name="region">柳南区</option> 
							</select> 
						</div>
					</div>
					<div class="edit-padding">
						<div class="edit-title">
							<span>来源地：</span>
						</div>
						<div class="edit-input">
							<input type="text" v-model="tableData.origin" name="origin" value="" placeholder="请输入来源地">
						</div>
					</div>
					<div class="edit-padding">
						<div class="edit-title">
							<span>目的地：</span>
						</div>
						<div class="edit-input">
							<input type="text" v-model="tableData.destination" name="destination" value="" placeholder="请输入目的地">
						</div>
					</div>
					<div class="edit-padding">
						<div class="edit-title">
							<span>所属应用：</span>
						</div>
						<div class="edit-input">
							<input type="text" v-model="tableData.app" name="app" value="" placeholder="请输入所属应用">
						</div>
					</div>
					<div class="edit-padding">
						<div class="edit-title">
							<span>账户状态：</span>
						</div>
						<div class="edit-input">
							<select v-model="tableData.status" name="status" value=""> 	  <option disabled value="">请选择账户状态</option> 
								<option name="status">待接单</option> 
								<option name="status">待取货</option> 
								<option name="status">配送中</option>
								<option name="status">已完成</option>  
							</select> 
						</div>
					</div>
					<div class="edit-padding">
						<div class="edit-title">
							<span>创建时间：</span>
						</div>
						<div class="edit-input">
							<input type="date" v-model="tableData.creationTime" name="creationTime" value="">
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
	   		tableData:{"id":0,"deliveryId":0,"orderid":0,"shop":"","region":"","origin":"","destination":"","app":"","status":"","creationTime":""},
		    editDetail: {},
		    pagesize: 5,
            curpage:1,
            searchVal:'',
		    newList:arr,
		    editid:''
		},
		mounted() {

	    },
	    methods: {
	    	addSubForm:function(){
                this.tableData.id = this.newList.length + 1;
                this.newList.push(this.tableData);
                this.tableData = { };
                this.addlist=false
            },
	      //编辑
		    edit(item) {
		        this.editDetail = {
		          riderId:item.riderId,
		          position: item.position,
		          riderStatus: item.riderStatus
		        }
		        this.editlist = true
		        this.editid = item.id
		    },
		    //删除
			deletelist(item) {
				let _this= this
				var id = item
			    $.ajax({
					    type: "get",
					    url:  "/admin/order/order_delete?id="+id,
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
				var orderid = document.getElementById('inputsearch').value
				
				document.getElementById('search').href="../order/order?orderid="+orderid
			},
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