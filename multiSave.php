function add_tr(){
var table=$("#tab");
var len=table.length+1;
// alert(len);
var lasttr=$('#tab tr:last');
lasttr.attr('id','indent_tr_'+(len+1));
// console.log(lasttr);
$("#tab").append(lasttr);
//alert('aa');
$("#tip_indent").hide();
glob_indent_msg=1;
//alert(lasttr);
// var sup_array=$('#sup_2').html();
// var psno_array=$('#psno_2').html();
// var store=$('#store_2').html();
// var shippingdate=$('#shippingdate_2').html();
// var agt=$('#agt_2').html();
// sup_array=sup_array.replace(/2/g,len+1);
// store=store.replace(/2/g,len+1);

// var stype=$('#stype_2').html();
// stype=stype.replace(/elect_stype_2/g,"elect_stype_"+(len+1));

// var str="<tr id=\"indent_tr_"+(len+1)+"\">";
    // str+="<td id=\"kw_"+(len+1)+"\"  width=\"15%\"><input type=\"text\"  size=\"14\" value=\"TPS78633DCQRG4\" name=\"kw\" class=\"order_txt\"/></td>";
    // str+="<td id=\"num_"+(len+1)+"\"><input type=\"text\"  name=\"num\" class=\"order_txt\" style=\"width:60px\" /></td>";
    // str+="<td id=\"psno_"+(len+1)+"\">"+psno_array+"</td>";
    // str+="<td id=\"sup_"+(len+1)+"\">"+sup_array+"</td>";
    // str+="<td id=\"fagent_"+(len+1)+"\"><input type=\"text\"  class=\"maf_txt\" id=\"fagent\" name=\"fagent\" style=\"\"   /><input type=\"hidden\" id=\"fagent_ok\" value=\"0\"  /><div id=\"fagent_close\"  style=\"display:none;position:relative;cursor:pointer;border:1px solid #8f8f8f;background:#3399fe;color:white;width:146px;line-height:26px;left:0px;top:2px;\" onclick=\"hide_sel_fagent(this)\">关闭厂牌提示</div><div id=\"fagent_msg\" style=\"display:none;height:150px;overflow-y:auto;position:relative;border:1px solid #8f8f8f;background:white;width:146px;line-height:26px;left:0px;top:2px;\"></div></td>";
    // str+="<td id=\"store_"+(len+1)+"\">"+store+"</td>";
    // str+="<td id=\"shippingdate_"+(len+1)+"\" style=\"display:none;\">"+shippingdate+"</td>";
    // str+="<td id=\"agt_"+(len+1)+"\" style=\"display:none;\">"+agt+"</td>";
    // str+="<td id=\"stype_"+(len+1)+"\" >"+stype+"</td>";
    // str+="<td id=\"price_"+(len+1)+"\"><em class=\"imp\" id=\"price_lable_"+(len+1)+"\" style=\"font-size:16px;margin-right:0px;\">￥</em><input type=\"text\"  name=\"price\" class=\"order_txt\" style=\"width:40px\" /></td>";
    // str+="<td id=\"message_"+(len+1)+"\"><textarea name=\"message\" class=\"indent_message\"></textarea></td>";
    // str+="<td><a href=\'javascript:del_tr("+(len+1)+")\'>删除</a></td></tr>";
//alert(str)

}