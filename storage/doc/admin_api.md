**简要描述：**

- 用户登录接口

**请求URL：**
- ` http://xx.com/api/user/login `

**请求方式：**
- POST

**参数：**

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |


 **返回示例**
```
  {
    "error_code": 0,
    "data": {
      "uid": "1",
      "username": "zhai coder",
      "name": "翟码农",
      "groupid": 2 ,
      "reg_time": "2019-08-01",
      "last_login_time": "0",
    }
  }
```
**返回参数说明**

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注**

- 更多返回错误代码请看首页的错误代码描述
