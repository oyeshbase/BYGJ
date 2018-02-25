{{--姓名--}}
@if(($conf->player_realname_conf_status & 2) == 2)
    <div class="form-inline clearfix">
        <label><i class="font-red">✱ </i>真实姓名</label>
        <input type="text" name="real_name" id="real_name"  class="form-control" placeholder="请输入真实姓名" autocomplete="off" required data-rule-username='true' data-msg-required='请输入真实姓名' data-msg-username='必须与取款银行卡姓名一致'/>
        <span class="tips">必须与取款银行卡姓名一致</span>
        <span class="valid"></span>
    </div>
    
@elseif(($conf->player_realname_conf_status & 1) == 1)
    <div class="form-inline clearfix">
        <label>真实姓名</label>
        <input type="text" name="real_name" id="real_name"  class="form-control" placeholder="请输入真实姓名" autocomplete="off" data-rule-username='true' data-msg-required='请输入真实姓名' data-msg-username='必须与取款银行卡姓名一致'/>
         <span class="tips">必须与取款银行卡姓名一致</span>
         <span class="valid"></span>
    </div>
@else
@endif



