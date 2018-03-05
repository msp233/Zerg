<?php
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/1
 * Time: 15:26
 */

namespace app\api\controller\v1;
use app\api\validate\IDMustBePostiveInt;
use app\api\model\Banner as BannerModel;
use think\Exception;

/*use app\api\validate\TestValidate;
use think\Request;
use think\Validate;*/

class Banner
{
    /**
     * 获取指定id的banner信息
     * @url /banner/:id
     * @http GET
     * @id banner的id号
     * */
    public function getBanner($id){
        (new IDMustBePostiveInt())->goCheck();
        try{
            $banner = BannerModel::getBannerByID($id);
        }
        catch ( Exception $ex){
            $err = [
                'error_code'=> 10001,
                'msg' => $ex->getMessage()
            ];
            return json($err,400);
        }
        if(!$banner){
            throw new Exception('内部错误！');

        }
        return $banner;


        /*var_dump($id);
        #独立验证
        $id = Request::instance()->param('id');
        var_dump($id);
        #验证器
        $data = [
            'id' => $id,
            'name' => 'vendordasfads',
            'email' => 'vendor'
        ];

        //独立验证start
        /*
        $validate = new Validate([
            'name' => 'require|max:10',
            'email' => 'email'
        ]);*/
        //独立验证end
        
        //验证器
        /*$validate = new IDMustBePostiveInt();

        //  batch() 批量验证，将所有不合规条件显示出来
        $result = $validate->batch()->check($data);
        #var_dump($result);
        if(!$result){
            print_r($validate->getError());
        }*/
    }




}