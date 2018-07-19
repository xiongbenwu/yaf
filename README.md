### 简述
- 为什么不直接用Composer？
  - 非常赞同eechen的那句话，不太喜欢Composer。难道不觉得把类代码放到library文件夹浑身就特别舒坦吗？
- 难道仅仅因为这个吗？
  - 也不全是。用ab跑了一些测试，用Composer的时候比不用Composer的时候，QPS会稍微低一丁点一丁点
- 那我还可以用Composer吗？
  - 当然可以...人家都把代码给你写出来，结果你连集成都要自动化，你要让我说你什么好？
- 可是..
  - 打住！没有可是！那以后万一要是由于某种原因你就用不上Composer了，合着你就只能眼睁睁看着代码抓瞎？
- 可是..
  - ![stop](http://static.ti-node.com/github_yaf_1.jpeg?imageMogr2/thumbnail/!800)

恕我直言，你见到过比yaf还还用的PHP框架吗？并没有，你并没有见过...

具体库的使用方法，目前，暂时，临时，先去看这些库的文档，都齐全的很...

集成了常用的类库，目前列表如下：
- Aes.php     对称加解密
- Alchemy     解压缩工具
- CalendR     日历工具
- CSRF.php    CSRF安全防范
- Curl        Curl网络请求
- FtpClient   ftp客户端
- Gregwar     图形验证码 
- Imagine     图片处理
- Medoo.php   mysql数据库
- MongoDB     Mongodb数据库
- PHPMailer   邮件发送
- Symfony     Symfony基础组件
- Upload      文件上传
- Valitron    数据验证
