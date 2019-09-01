<div align="center">

# Themis Web Interface

An **beautiful** and **easy-to-use** Web Interface for **[Themis](https://dsapblog.wordpress.com)**

<img src="https://lh3.googleusercontent.com/UKuF9CV5tJN9VXVOSvsqcy2FFUBAwyX01MdYooQ8IZNehFELH025Ornht5rY0EnRmFWlqQhOiiTJv8qCffz9n5DApT3kNG-7LjlTFgWlZaO1NYUw0h8HLxTc5sRX7OdpRLPjD28QAQ=w2400" width="560px">

[![version](https://img.shields.io/badge/release-v0.4.6-brightgreen.svg?longCache=true&style=for-the-badge)](https://github.com/belivipro9x99/themis-webinterface/releases/)
[![license](https://img.shields.io/badge/license-MIT-orange.svg?longCache=true&style=for-the-badge)](https://github.com/belivipro9x99/themis-web-interface/blob/master/LICENSE)
[![status](https://img.shields.io/badge/status-May_contain_bugs-blue.svg?longCache=true&style=for-the-badge)]()
[![Travis CI Build Status](https://img.shields.io/travis/belivipro9x99/themis-web-interface.svg?style=for-the-badge)](https://travis-ci.org/belivipro9x99/themis-web-interface)
[![codefactor](https://www.codefactor.io/repository/github/belivipro9x99/themis-web-interface/badge/master?style=for-the-badge)](https://www.codefactor.io/repository/github/belivipro9x99/themis-web-interface)

</div>

---

**Themis Web Interface** là một dự án mã nguồn mở, phi lợi nhuận với mục đích chính nhằm biến việc quản lí và tổ chức các buổi học lập trình, ôn tập và tổ chức kì thi trở nên dễ dàng hơn.

| 🌿     |                                                                                          Travis CI Status                                                                                           |
|:-------|:---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------:|
| master |    [![Travis CI Build Status](https://img.shields.io/travis/belivipro9x99/themis-web-interface/master.svg?label=master&style=for-the-badge)](https://travis-ci.org/belivipro9x99/themis-web-interface)     |
| indev | [![Travis CI Build Status](https://img.shields.io/travis/belivipro9x99/themis-web-interface/indev.svg?label=indev&style=for-the-badge)](https://travis-ci.org/belivipro9x99/themis-web-interface) |

- [Demo](#demo)
- [Yêu cầu](#yêu-cầu)
- [Tính năng](#tính-năng)
- [Cài đặt và hướng dẫn sử dụng](#cài-đặt-và-hướng-dẫn-sử-dụng)
- [API Document](#api-document)
- [Screenshot](#screenshot)
- [Contributor](#contributor)

## Demo
* **000webhost**: <a href="https://tweb-demo.000webhostapp.com/" target="_blank">https://tweb-demo.000webhostapp.com/</a>

### Tài khoản:

| id    | username | password |
|:------|:---------|:---------|
| admin | admin    | admin    |
| 1     | user1    | 123456   |
| 2     | user2    | 123456   |

* Lưu ý:
	- Chức năng thay đổi mật khẩu và thay đổi thư mục upload đã tắt.
	- Bài nộp lên sẽ không được Themis chấm.

## Tính năng

<div style="display: flex; flex-direction: row;">
<div style="display: inline-block; flex: 1 1 0;">
	<h1>Tất cả mọi thứ, trong một trang</h1>
	<h3>Không cần phải mệt nhọc di chuyển qua lại các trang, toàn bộ các chức năng đều nằm gọn gàng trong một trang duy nhất!</h3>
</div>
<div style="display: inline-block; padding: 0 20px;">
	<img src="https://lh3.googleusercontent.com/UeHfg3u7VC-sP01dKDz_ktRQtItvTc6dPfZSDDp5p4J81Tspl1R8Ujg2tXJKzf6z24T_U0zTuULtjTWJQObeY2caOVz88YgT6usTbmFYqVlEh0BjWK0PzLl4ekl3urPDs5aGV8WdAw=w2400" width="600px">
</div>
</div>

<div style="display: flex; flex-direction: row;">
<div style="display: inline-block; padding: 0 20px;">
	<img src="https://lh3.googleusercontent.com/D28g6keHMrLT3LaVEtTTkURv8pBDfZZWTc8pXo2YwsYxpKx154uVWf7uxSIvStJzA75l7nIVhilnRYm-S9aER2EzhgWrdvtjLrb1UbLrt2UoUsOPKbXhC-kn0vON2T2gj-cQxe_wuA=w2400" width="600px" style="padding: 0; margin: 0;">
</div>
<div style="display: inline-block; flex: 1 1 0;">
	<h1>Nộp bài với thao tác kéo-thả!</h1>
	<h3>Nộp một hoặc nhiều bài làm cùng lúc bằng một động tác kéo-thả đơn giản!</h3>
	<h3>Thả bài làm của bạn vào cửa sổ nộp bài và Themis Web Interface sẽ gửi bài của bạn lên máy chấm, tự động!</h3>
</div>
</div>

<div style="display: flex; flex-direction: row;">
<div style="display: inline-block; flex: 1 1 0;">
	<h1>Xem đề bài trực tiếp</h1>
	<h3>Mệt mỏi vì phải tải và mở đề? Máy bạn không thể mở tệp đề? Giờ bạn có thể xem đề bài trực tiếp trên Themis Web Interface!</h3>
</div>
<div style="display: inline-block; padding: 0 20px;">
	<img src="https://lh3.googleusercontent.com/EsNaoPY-s1Pjv3bEBu-MhyLlUC9dQ9-QTMPC09xJ5L8mVGC74YjnKtDvSkYPTAYaFFM9q42eI9bAaGTfxOpJKDuh1vdd64Yxc1653arTe_xa2HIG2Abpw84I8lhHrA_EVG4OQ0S5qw=w2400" width="600px">
</div>
</div>

<div style="display: flex; flex-direction: row;">
<div style="display: inline-block; padding: 0 20px;">
	<img src="https://lh3.googleusercontent.com/r5kVh5niYdF58ybGHeyKp-2OxJfdUPoK5L4JeHf83R95GsRC4C7cC6lGm1kIuQvzHPozkp1V9QFCIYcaG1LLy2Q1xaz_M8ILPhnIRNmDzTFUlcCcSzhKwhE3eVrZrHfvImGL0KGYCw=w2400" width="600px" style="padding: 0; margin: 0;">
</div>
<div style="display: inline-block; flex: 1 1 0;">
	<h1>Chế độ kỳ thi</h1>
	<h3>Thời gian được tính chính xác đến hàng thập phân thứ sáu! Đảm bảo tính chính xác khi kì thi diễn ra.</h3>
	<h3>Không có dữ liệu nào liên quan đến đề bài bị lộ trước khi kì thi diễn ra</h3>
</div>
</div>

<div style="display: flex; flex-direction: row;">
<div style="display: inline-block; flex: 1 1 0;">
	<h1>Bảng xếp hạng rõ ràng</h1>
	<h3>Được thiết kế đơn giản và rõ ràng! Thứ hạng của các thí sinh đều được cập nhật tự động và sắp xếp minh bạch, toàn bộ các bài làm đều được tô màu tương ứng với kết quả chấm. Và còn có thể xem kết quả chấm của thí sinh khác nữa!</h3>
</div>
<div style="display: inline-block; padding: 0 20px;">
	<img src="https://lh3.googleusercontent.com/YMPb4tEeV0qI6NKUnNS5ctOHdq_ngchNKKqFh3qiavJyduYsfqKNNNWYAiM8tVi9KjO0qlYVup2jkgsisWmGeIR_TK0TZkVQbHIA-KkhPcfEFLxas802KYHT-O_ukh6W3WEi7MnKQw=w2400" width="600px">
</div>
</div>

<div style="display: flex; flex-direction: row;">
<div style="display: inline-block; padding: 0 20px;">
	<img src="https://lh3.googleusercontent.com/DSl1HyD7NQzv08x3zk_VZWVNkJllXGD5oQ7YwoXYOXE2ZwCcIB4JNZNRIeQPbxKt6bXCZYjHX3btkrkgblLEt-kAGrLQHnJfZU6-SXSV-OClwpM1cDCHJFCZcqgivXOkw67SpnL5VA=w2400" width="600px" style="padding: 0; margin: 0;">
</div>
<div style="display: inline-block; flex: 1 1 0;">
	<h1>Danh sách nhật ký chi tiết</h1>
	<h3>Hiển thị 5 chi tiết quan trọng của mỗi bài: tên bài, ngôn ngữ, tình trạng, thời gian nộp và điểm!</h3>
	<h3>Tên bài được tô màu tương ứng với trạng thái của bài.</h3>
</div>
</div>

<div style="display: flex; flex-direction: row;">
<div style="display: inline-block; flex: 1 1 0;">
	<h1>Tải các tệp công khai</h1>
	<h3>Các tệp đính kèm và tệp công khai đều nằm gọn trong một trang, dễ dàng tìm kiếm và tải về bất kỳ tệp với một click đơn giản!</h3>
</div>
<div style="display: inline-block; padding: 0 20px;">
	<img src="https://lh3.googleusercontent.com/PHyX9dfRDTLkBnz5S7wagD3pYBeLjusK7F_WXu6EMQim2kTvv4q8pct2XqW-DCiYqo08wI00Eo9a4WdIx_Pb1CFBbqsYPwKes_RkxXYiKIjjrF8hnpP2k6S8UGEIQ-wEHI9msmAH1Q=w2400" width="600px">
</div>
</div>

<div style="display: flex; flex-direction: row;">
<div style="display: inline-block; padding: 0 20px;">
	<img src="https://lh3.googleusercontent.com/fieCpXgSjMtXmYMbzlrRbnz2P75XxIykAL_vzrSAk2XKHV7-omEOEJ8syisaq7EaXjZ6Gsj2NDCTw6kBTzxsPMUbpq66cibV7QiIk67fwPBo1a8wKtykeC6S6UJBkQmpt78AJofeQQ=w2400" width="800px" style="padding: 0; margin: 0;">
</div>
<div style="display: inline-block; flex: 1 1 0;">
	<h1>Bảng cài đặt dành cho <b>Admin</b></h1>
	<h3>Thay đổi cách hệ thống vận hành một cách đơn giản! Không còn cần phải chỉnh sửa tệp <i>config</i> mỗi khi muốn thay đổi cài đặt của hệ thống. Chỉ cần 2 click là bạn đã tới trang cài đặt cho admin với toàn bộ cài đặt mà bạn có thể tìm thấy!</h3>
</div>
</div>

<div style="display: flex; flex-direction: row;">
<div style="display: inline-block; flex: 1 1 0;">
	<h1>Tạo và chỉnh sửa đề bài trên trang</h1>
	<h3>Tạo đề bài với nhiều thông tin đa dạng như: Tiêu đề, loại tệp, điểm, Nội dung, Các test, và cả Ảnh đính kèm và Tệp đính kèm nữa...!</h3>
</div>
<div style="display: inline-block; padding: 0 20px;">
	<img src="https://lh3.googleusercontent.com/DhFQzf-JFhajuEi5wt8elpwMfvLSNVcghqMVQ47yPi6KoXzlDAYJfTqkL9bJte8AS-0TNh1xe1ljGrLhMobfmiRBvDuQAeLzPXnuypFlIQ4HZM0ZZHAHHsRRnZVQCvupNIN9YpmtPw=w2400" width="600px">
</div>
</div>

<div align="center">
	<h1>Chủ đề sáng/tối</h1>
	<h3>Mỏi mắt vì màu quá sáng? Hãy thử dùng chế độ tối để bảo vệ mắt của bạn!</h3>
</div>

<div style="display: flex; flex-direction: row;">
<div align="center" style="display: inline-block; padding: 0 10px; flex: 1 1 0;">
	<img src="https://lh3.googleusercontent.com/PHBuL5yRBvxgY7PVhb0MzK7Audlara9uwCU7R23ASUMhxKmAU_EDQof84TtmISWZJ5OPyctfwipLXl6mb6OAlH114oj7SwFu2uyrrRybaJXn63RDsoC_lAHMDCwXfPciQzaOk0slUg=w2400">
	<i>Sáng</i>
</div>
<div align="center" style="display: inline-block; padding: 0 10px; flex: 1 1 0;">
	<img src="https://lh3.googleusercontent.com/Ua7x_lylzc07gykvxjcOa4ULKeKMM9E2L6bbnN4xF380bIdsBkyhfrxfGyyZ0NqudRolrtrhdExwKHkpOOqQEfzb1DUF4-wMjh9cLZyJ5cH4CSP8VOVNl1d3RUkP2qoCaaioMQqQxw=w2400">
	<i>Tối</i>
</div>
</div>

## Cài đặt và hướng dẫn sử dụng

Hướng dẫn cài đặt, sử dụng và nâng cấp hiện có trong [Wiki](https://github.com/belivipro9x99/themis-web-interface/wiki/installation-and-config) của dự án.

## API Document

**API** giúp bạn có thể giao tiếp với hệ thống mà không cần phải sử dụng trang web nộp bài. Do đó bạn có thể viết một chương trình chạy phía client trong trường hợp trang web nộp bài không hoạt động.

Toàn bộ **Document** đều có ở trong [Wiki:API](https://github.com/belivipro9x99/themis-web-interface-reloaded/wiki/Getting-Started-with-API) của dự án.

## Screenshot

<p align="center"><img src="https://lh3.googleusercontent.com/hwayDiWGzXbgufohz2bY7bPkuwV5G87peF_8F6nNM3wyXFxep4_z0riHqzOPKB4gwsvWhCFtIxEjLkkMvAn-X8zCj5Uv3A9Dc5Sh3ZVNFylCgGlpAvXjFX4twrKmnRY9oRkioHkjbQ=w2400"></p>

<p align="center"><img src="https://lh3.googleusercontent.com/ji5o8WyPb3_QrWNbJO8rMDM2SNxRr8ta9QnpGAMD5tiKYf28lQ6fvtbRfS06rElMBW2DwLTw-AwQKyIj_BCodlXPeXG0UoWG7_sDFnxijxg3QoxKELFlo7xfel1Wn4ESR-PSHNDjIQ=w2400"></p>

<p align="center"><img src="https://lh3.googleusercontent.com/UGaJOI_NQuFkzxbGKbOM18UEvzfioakd1SNHfc-VsbOzIVH_a2EMUUxN1LbtSZkmRiITuJklnmaw2J_Me-mMr8Hn3OTd92LBDn3pBjHs24UDbTnEseb6_VLGU60FwPLdHu0QOQgrUQ=w2400"></p>

<p align="center"><img  src="https://lh3.googleusercontent.com/ay2242TlEQqIJJ8m7Oy_E8R4QeOEo9US_im_4sfjhIoIll3CtTbIvPAG5mnwZZNRqFXWCmWIa9zuSMITrvTPIyn2wVLhpTcbH75g-KLRLA3vrEZZLYGTGDALlLPNbeGi58_TTUpxdg=w2400"></p>

<p align="center"><img  src="https://lh3.googleusercontent.com/JoE-vCwvcYzK1RfENe1x6A3U2o8IAvet6W23ZPNerY2LWw7ZC1ch4Ahsm8s5PFSupWnyMmRpf9QIJ1v-MEu7fXh_0CjGo0BpLxOZtE4eerVkACU3nvJ6j1TLqPE-FAuocqsQ5c6yow=w2400"></p>

<p align="center"><img  src="https://lh3.googleusercontent.com/mkP4cd5RY7rlNZks9pESf93_pnbDmtkpXHTDXQ8TtYIc0SjZy-2-PRYM8vNdNSB4ArPS7TB3-U6LIScCEg6cuzlGGXDFPnV-yZ4ECSoEUzzYjr9zl-Ldmnzt9Sv9c3Um82ocV59KoA=w2400"></p>

<p align="center"><img  src="https://lh3.googleusercontent.com/uz8FEL_1nHxlKR9SVRpGDt-dx1OhQgrkh5h5FfV-bo-DtCbHbPNq61E4AAKknBAMHVGGUGQhjffiPgNqspXGlTqjlMIovER5HMQSF-C7qIPGDTH3-SG4dE9sC2q70M04uWle2QOsOw=w2400"></p>

<p align="center"><img  src="https://lh3.googleusercontent.com/e9BAF8x4psILmn652KnqITIA_XdcxqAZf7SpxVXHrLU5r-PIwK-nWVj-zv8FNQeyBLHbm4nYUVznBRNra0G-JCKdACZ0l8abcc2BcZbhzK0az7Z6ZjraCRpwd7zfPPdNMANBqxunAg=w2400"></p>

<p align="center"><img  src="https://lh3.googleusercontent.com/RLZyPc2nO5aXcP2-YVzA960DQVbgY7jOE_HkI4xy6edJRHK43YXsVbU7q6Xwt6179ic9gdkQidRr56r4V_yc6LvPZcqME831d2-8IFlgfBaKblEe8Uu-NoKAiSTx1p75qW_RsMR93w=w2400"></p>

## Contributor

Many thanks to ```namkojj```, aka [Nam](https://www.facebook.com/profile.php?id=100008107446343) for helping me translating, hunting bugs and testing out this project.