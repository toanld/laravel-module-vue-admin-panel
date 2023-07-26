<script setup>
import { Head, Link, useForm,router } from "@inertiajs/vue3"
import {
    mdiPlus,
    mdiCogOutline,
    mdiSquareEditOutline,
    mdiTrashCan,
    mdiAlertBoxOutline,
} from "@mdi/js"
import LayoutAuthenticated from "@/Layouts/LayoutAuthenticated.vue"
import SectionMain from "@/Components/SectionMain.vue"
import SectionTitleLineWithButton from "@/Components/SectionTitleLineWithButton.vue"
import BaseButton from "@/Components/BaseButton.vue"
import CardBox from "@/Components/CardBox.vue"
import BaseButtons from "@/Components/BaseButtons.vue"
import NotificationBar from "@/Components/NotificationBar.vue"
import Pagination from "@/Components/Admin/Pagination.vue"
import Sort from "@/Components/Admin/Sort.vue"

import LayoutErp from "@/Erp/Layouts/LayoutErp.vue"
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'
onMounted(() => {
    initFlowbite();
})
const props = defineProps({
    datas: {
        type: Object,
        default: () => ({}),
    },
    filters: {
        type: Object,
        default: () => ({}),
    },
    can: {
        type: Object,
        default: () => ({}),
    },
    title: String,
    meno: String
})

const form = useForm({
    search: props.filters.search,
})

const formDelete = useForm({})

function destroy(id) {
    if (confirm("Are you sure you want to delete?")) {
        formDelete.delete(route("personnel.destroy", id))
    }
}
//router.reload({ only: ['datas'] });
</script>

<template>
 <LayoutErp
    :title="title">
<div id="accordion-open" class="overflow-y-auto h-screen" >
    Màn hình Dynamic Island - Sự biến mất của màn hình tai thỏ thay thế bằng thiết kế viên thuốc, OLED 6,7 inch, hỗ trợ always-on display
Cấu hình iPhone 14 Pro Max mạnh mẽ, hiệu năng cực khủng từ chipset A16 Bionic
Làm chủ công nghệ nhiếp ảnh - Camera sau 48MP, cảm biến TOF sống động
Pin liền lithium-ion kết hợp cùng công nghệ sạc nhanh cải tiến
iPhone 14 Pro Max sở hữu thiết kế màn hình Dynamic Island ấn tượng cùng màn hình OLED 6,7 inch hỗ trợ always-on display và hiệu năng vượt trội với chip A16 Bionic. Bên cạnh đó máy còn sở hữu nhiều nâng cấp về camera với cụm camera sau 48MP, camera trước 12MP dùng bộ nhớ RAM 6G đa nhiệm vượt trội.

Đánh giá iPhone 14

Những ưu đãi hấp dẫn khi mua iPhone 14 Pro Max chính hãng VN/A tại CellphoneS
Trước tiên, khi chọn mua iPhone 14 Pro Max chính hãng tại Hệ thống CellphoneS bạn sẽ được sở hữu điện thoại với mức giá niêm yết vô cùng ưu đãi. Ngoài ra, CellphoneS hiện nay còn có thêm các chương trình khuyến mãi hấp dẫn khi khách hàng chọn thanh toán qua những thẻ ngân hàng và ví điện tử sau:

-   Khi mở thẻ ngân hàng VPBank, bạn sẽ được ưu đãi đến 800 nghìn đồng;

-   Nếu thanh toán qua thẻ Kredivo, bạn còn được giảm thêm 5% trên giá trị sản phẩm (tối đa 500 nghìn đồng);

-   Bạn sẽ nhận được voucher giảm giá 200 nghìn đồng khi mở thẻ tín dụng ViB tại CellphoneS;

-   Ngoài ra, khách hàng còn được giảm thêm 100 nghìn đồng khi chọn thanh toán qua ví điện tử ShopeePay.

ưu đãi hấp dẫn khi mua iPhone 14 Pro Max chính hãng VN/A t

Bên cạnh các chương trình ưu đãi khi thanh toán qua thẻ ngân hàng hoặc ví điện tử, bạn còn được giảm thêm 1% trên giá trị sản phẩm khi là thành viên Smember. CellphoneS cũng hỗ trợ chương trình trả góp với mức lãi suất 0% nhằm hỗ trợ khách hàng giảm bớt gánh nặng tài chính nhưng vẫn có điện thoại để sử dụng.

Đặc biệt hơn, nếu bạn đang sở hữu một chiếc điện thoại cũ và muốn lên đời iPhone 14 Pro Max thì có thể tham khảo chương trình thu cũ đổi mới của CellphoneS. Mức trợ giá khi thu cũ đổi mới CellphoneS đưa ra lên đến 2 triệu đồng cùng thủ tục thu cũ đơn giản, nhanh chóng giúp bạn tiết kiệm khoản chi phí đáng kể.

Những điểm mới trên iPhone 14 Pro Max với iPhone 13 Pro Max
Vậy iPhone 14 Pro Max vừa được Apple ra mắt trong thời gian gần đây có điểm gì mới so với người tiền nhiệm iPhone 13 Pro Max? Để có được góc nhìn tổng quan về 2 dòng flagship nhà Apple, bạn đọc hãy theo dõi bảng so sánh bên dưới nhé:

iPhone 14 Pro Max

iPhone 13 Pro Max

Kích thước

160.7 x 77.6 x 7.9 mm

160.8 x 78.1 x 7.7 mm

Trọng lượng

240 gam

240 gam

Màu sắc

Đen, Tím, Bạc, Vàng

Đen, Xanh dương, Bạc, Xanh lá, Vàng

Màn hình

OLED Retina 6.7 inch

Thiết kế viên thuốc

Dynamic Island

Màn hình luôn bật

OLED Retina 6.7 inch

Thiết kế tai thỏ

Độ phân giải

2796 x 1290 pixel   2778 x 1284 pixel
Mật độ điểm ảnh

460 PPI 458 PPI
Độ sáng tối đa

2000 nits   1200 nits
Tần số quét

Từ 1Hz đến 120Hz    Từ 10Hz đến 120Hz
Bộ vi xử lý

A16 Bionic  A15 Bionic
Dung lượng RAM

6GB 6GB
Bộ nhớ trong

128GB, 256GB, 512GB, 1TB    128GB, 256GB, 512GB, 1TB
Dung lượng pin

4352 mAh    4352 mAh
Công suất sạc

20W khi sạc có dây

15W khi sạc Magsafe không dây

7,5W khi sạc Qi không dây

20W khi sạc có dây

15W khi sạc Magsafe không dây

7,5W khi sạc Qi không dây

Camera

48MP + 12MP + 12MP

12MP + 12MP + 12MP

Hỗ trợ 5G

Có

Có

Đánh giá iPhone 14 Pro Max - siêu phẩm cao cấp nhất của Apple hiện tại
Những dòng iPhone đến từ nhà Apple đều có sức hút đặc biệt ngay từ thời điểm ra mắt và thế hệ iPhone 14 Pro Max cũng không ngoại lệ. Có thể nói, iPhone 14 Pro Max là sự kết hợp hoàn hảo giữa các yếu tố về thiết kế, cấu hình, tính năng, hệ điều hành,... Nếu bạn tò mò về siêu phẩm này, hãy đọc ngay phần đánh giá chi tiết bên dưới nhé.

Màn hình viên thuốc độc đáo
Ở dòng iPhone 14 Pro Max 128GB, Apple đã thay thế thiết kế tai thỏ truyền thống trước đó bằng thiết kế hình viên thuốc mới mẻ. Ưu điểm của thiết kế hình viên thuốc chính là không chiếm quá nhiều diện tích màn hình nhằm tối ưu hóa không gian hiển thị nội dung của smartphone.

Ngoài ra, siêu phẩm mới của nhà Táo cũng sở hữu kích thước màn hình đạt 6.7 inch với độ phân giải 2796 x 1290 pixel, tấm nền OLED cùng công nghệ Retina độc quyền. Nhờ vào đó, người dùng sẽ có được những trải nghiệm giải trí và làm việc hoàn hảo với hình ảnh sắc nét và rực rỡ.

Đánh giá màn hình iPhone 14 Pro Max

Nhằm giúp người dùng có thể sử dụng iPhone ngay dưới ánh nắng trực tiếp, Apple đã nâng cấp độ sáng tối đa đến 2000 nits ở siêu phẩm mới nhất. Hơn nữa, màn hình của máy cũng có khả năng tự động điều chỉnh ánh sáng phù hợp với môi trường giúp bảo vệ thị lực, cũng như tiết kiệm pin.

Cũng giống với người tiền nhiệm, thế hệ iPhone 14 Pro Max cũng được trang bị tần số quét đạt 120Hz nhằm tạo nên trải nghiệm chạm vuốt mượt mà cho người dùng. Đặc biệt hơn, tần số quét trên máy có thể tự động thay đổi dao động từ 1Hz đến 120Hz giúp hạn chế tiêu thụ dung lượng pin trên máy.

Con chip A16 Bionic tiến trình 4nm mạnh mẽ
Phiên bản iPhone 14 Pro Max 128GB là lần đầu tiên Apple sử dụng con chip được xây dựng trên tiến trình 4nm - A16 Bionic. Con chip này có tổng cộng 6 nhân với 2 nhân hiệu suất cao kết hợp với 4 nhân tiết kiệm điện.

Đánh giá con chip iPhone 14 Pro Max

Theo như đánh giá thực tế, hiệu suất xử lý của chip A16 Bionic nhanh hơn đến 10% so với phiên bản A15 trước đó. Ngoài ra, con chip này cũng đi kèm với GPU 5 nhân với băng thông bộ nhớ tăng thêm đến 50% so với dòng A15 giúp smartphone có thể xử lý những tựa game có đồ họa cao.

Cấu hình ấn tượng, hiệu năng khủng
Bên cạnh trang bị con chip A16 Bionic mạnh mẽ, hiệu suất vượt trội của iPhone 14 Pro Max còn được bổ sung bởi dung lượng RAM 6GB. Nhờ vào đó, thiết bị có thể xử lý đa tác vụ cùng lúc và không gặp phải tình trạng giật, lag. Ngoài ra, chiếc smartphone cũng sở hữu bộ nhớ trong tối đa lên đến 1TB giúp người dùng lưu trữ mọi dữ liệu và ứng dụng yêu thích.

Đánh giá hiệu năng iPhone 14 Pro Max

Điểm nhấn ở cấu hình của iPhone 14 Pro Max cũng nằm ở khả năng kết nối 5G với tốc độ vượt trội đạt đến 10 Gigabit/ giây. Nhờ vào đó, công nghệ 5G trên chiếc smartphone có thể hỗ trợ người dùng luôn giữ được kết nối mạng khi đang ở bất kỳ quốc gia nào trên thế giới và không gặp gián đoạn.

Hệ điều hành IOS 16 cho khả năng cá nhân hoá cao
Dòng iPhone 14 Pro Max chạy trên hệ điều hành iOS 16 được giới thiệu lần đầu tiên trong sự kiện công nghệ WWDC 2022. Điểm nổi bật được nhiều người dùng ưa chuộng ở phiên bản iOS 16 nằm ở tính cá nhân hóa cao. Bạn có thể tự do thay đổi màn hình khóa với các tiện ích, hình ảnh, font chữ,... theo ý thích.

Đánh giá hệ điều hành iPhone 14 Pro Max

Hệ điều hành iOS 16 còn nổi bật với tính năng Live Activities hỗ trợ người dùng cập nhật các dữ liệu quan trọng như tiến độ tập luyện, đơn giao hàng,... Ngoài ra, iOS 16 còn bổ sung thêm tính năng thư viện ảnh chung trên iCloud giúp bạn dễ dàng chia sẻ những bức ảnh chụp với bạn bè, người thân, hay đồng nghiệp của mình.

Camera chính 48MP sắc nét, zoom quang học 6X
Nhắc đến những chiếc điện thoại iPhone thì không thể không kể đến khả năng chụp ảnh và quay video. Ở thế hệ flagship iPhone 14 Pro Max 128GB mới nhất, Apple đã nâng cấp độ phân giải ở cảm biến chính của smartphone từ 12MP lên đến 48MP. Ống kính 48MP này sẽ hỗ trợ người dùng chụp những khung cảnh ở xa vô cùng sắc nét với khả năng zoom quang học đến 6x.

Hệ thống ống kính của iPhone 14 Pro Max còn được bổ sung một camera góc rộng 12MP và một camera TrueDepth 12MP. Hai ống kính có khả năng lấy nét tự động nhanh chóng, cũng như chụp ảnh trong điều kiện thiếu sáng rất tốt. Cùng với sự hỗ trợ của con chip A16 Bionic, những bức hình được chụp trên dòng máy này trở nên rực rỡ và sinh động hơn.

Đánh giá camera iPhone 14 Pro Max

Bên cạnh đó, camera chính trên iPhone 14 Pro Max còn được trang bị thêm tính năng ProRAW có khả năng chụp những bức ảnh gốc vô cùng tự nhiên. Ngoài ra, Action Mode ở cụm camera trên máy cũng hỗ trợ chống rung và chống nhiễu khung hình khi quay chụp.

Với những cải tiến vượt bậc như trên, hệ thống camera trên dòng iPhone thế hệ mới có khả năng quay video với chất lượng 4K cùng với tốc độ 30 khung hình/ giây. Ngoài ra, ống kính của smartphone còn có thêm một số tính năng khác như chế độ HDR, chụp ảnh ban đêm, chụp góc rộng, chụp cận cảnh,...

Về camera selfie, thế hệ iPhone 14 2022 mới nhất của nhà Táo có ống kính với độ phân giải đến 12MP cùng nhiều tính năng như tự động lấy nét, chụp phong cảnh, chụp chân dung,... Nhờ vào đó, người dùng có thể ghi lại những khoảnh khắc đáng nhớ trong cuộc sống hàng ngày vô cùng chân thực và sắc nét.

Dung lượng pin vượt trội 4352mAh
Nhờ có dung lượng pin vượt trội 4352mAh và khả năng tiết kiệm năng lượng của chip A16 Bionic, chiếc iPhone 14 Pro Max có thời gian hoạt động dài hơn so với người tiền nhiệm. Cụ thể, thời gian tiêu thụ pin của smartphone đối với từng tác vụ như sau:

Tác vụ

Thời gian tiêu thụ pin

Xem video

29 giờ

Phát trực tuyến video

25 giờ

Phát lại âm thanh

95 giờ

** Thời lượng sử dụng thực tế sẽ thay đổi tùy thuộc cài đặt đặt thiết bị cũng như môi trường xung quanh.

Sản phẩm vẫn được trang bị công suất sạc 20W giống với người tiền nhiệm. Tuy nhiên, bạn có thể nạp đầy đến 50% dung lượng pin cho điện thoại chỉ trong vòng 30 phút. Ngoài ra, thiết bị cũng hỗ trợ người dùng sạc không dây Magsafe với 15W và sạc không dây Qi với 7,5W.

Tính năng màn hình Dynamic Island
Điều làm nên khác biệt ở dòng iPhone 14 Pro Max nằm ở tính năng màn hình Dynamic Island độc đáo. Thông qua tính năng này, bạn có thể theo dõi các thông báo trên điện thoại, điều hướng bản đồ, tùy chỉnh những bản nhạc,... vô cùng tiện lợi.

Ngoài ra, siêu phẩm mới của nhà Táo khuyết còn được trang bị thêm tính năng màn hình luôn bật (Always-On display). Theo đó, người dùng có thể xem được đồng hồ, các thông báo trên điện thoại,... nhanh chóng và không cần phải khởi động màn hình như trước.

Tính năng iPhone 14 Pro Max

Gọi điện qua vệ tinh (Emergency SOS) cũng là một tính năng hữu ích được bổ sung ở thế hệ iPhone 14 Pro Max. Khi không thể kết nối với Wifi và dữ liệu di động, chiếc iPhone của bạn sẽ tự động kết nối với hệ thống vệ tinh và thông báo tình trạng khẩn cấp của bạn đến nơi cứu hộ gần nhất.

Thêm vào đó là tính năng Phát hiện va chạm tự động (Crash Detection). Tính năng này sử dụng con quay hồi chuyển và gia tốc kế được trang bị trên iPhone để xác định những va chạm xe ô tô đang xảy ra. Nếu có va chạm xảy ra, chiếc smartphone sẽ tự động gửi thông báo đến trạm cấp cứu, cũng như số điện thoại liên hệ bạn đã thiết lập trước đó.

iPhone 14 Pro Max có mấy màu?
Trong lần ra mắt mới nhất, dòng iPhone 14 Pro Max của nhà Táo vẫn thu hút nhiều người dùng bởi thiết kế vô cùng sang trọng và thời thượng. Chiếc smartphone sẽ giúp bạn thể hiện cá tính riêng của mình thông qua 4 gam màu bao gồm: tím đậm, vàng gold, đen và bạc.

Màu tím đậm: Chiếc iPhone 14 Pro Max mang màu tím đậm thể hiện phong cách lịch sự và nhã nhặn. Đây là sự lựa chọn hoàn hảo cho những ai theo đuổi phong cách cá tính, trẻ trung và năng động;

Màu vàng Gold: Phiên bản iPhone màu vàng Gold mang đến nét đẹp vô cùng sang trọng và thanh lịch cho người sử dụng. Đặc biệt hơn, màu vàng Gold có ưu điểm nổi bật là các vết trầy gây mất thẩm mỹ trên máy rất ít bị phát hiện so hơn so với các gam màu khác;

iPhone 14 Pro Max có mấy màu

Màu đen: Tông màu đen là gam màu cơ bản ở tất cả các phiên bản iPhone của nhà Apple. Màu đen sở hữu nét đẹp huyền bí và không bao giờ bị lỗi thời;

Màu bạc: Những chiếc iPhone màu bạc sở hữu vẻ ngoài khá độc đáo và tôn lên nét đẹp sang trọng và đẳng cấp cho người sử dụng. Gam màu bạc phù hợp với nhiều đối tượng khách hàng từ những người trẻ đến cao tuổi.

iPhone 14 Pro Max có bao nhiêu phiên bản dung lượng bộ nhớ?
Ở dòng flagship thế hệ mới, thương hiệu Apple đã có những bước cải tiến vượt bậc về dung lượng bộ nhớ của sản phẩm. Cụ thể hơn, dòng iPhone 14 Pro Max được mở bán với 4 tùy chọn bộ nhớ trong bao gồm: 128GB, 256GB, 512GB và 1TB.

iPhone 14 Pro Max có bao nhiêu phiên bản dung lượng bộ nhớ

Có thể thấy, dung lượng bộ nhớ tối đa của chiếc flagship này đạt đến 1TB có thể đáp ứng nhu cầu lưu trữ dữ liệu khổng lồ của mọi người tiêu dùng. Giờ đây, với chiếc iPhone này bạn có thể lưu lại mọi thông tin và cài đặt các ứng dụng yêu thích và mang theo đến bất kỳ đâu.

iPhone 14 Pro Max hỗ trợ bao nhiêu sim?
Theo như nguồn tin chính thức từ phía nhà sản xuất Apple, các mẫu iPhone 14 Pro Max 128GB chính hãng ở Việt Nam vẫn được trang bị một khe cắm sim vật lý. Chiếc điện thoại sẽ bao gồm 1 eSim và 1 sim vật lý truyền thống. Nhờ vào đó, người dùng có thể sử dụng cùng lúc 2 số điện thoại trên chiếc smartphone.

iPhone 14 Pro Max hỗ trợ bao nhiêu sim

iPhone 14 Pro Max được bán với giá bao nhiêu?
Có thể thấy, iPhone 14 Pro Max là chiếc smartphone vô cùng hoàn hảo từ thiết kế bên ngoài đến các thông số cấu hình bên trong. Giá bán của dòng flagship này khá đa dạng, tùy thuộc vào dung lượng bộ nhớ trong trên từng sản phẩm. Cụ thể hơn, giá bán của từng sản phẩm tại CellphoneS như sau:

- Phiên bản iPhone 14 Pro Max 128GB/ 6GB được bán với giá 26,59 triệu đồng;

- Phiên bản iPhone 14 Pro Max 128GB/ 6GB được bán với giá 29,69 triệu đồng;

- Phiên bản iPhone 14 Pro Max 512GB/ 6GB được bán với giá 36,19 triệu đồng;

- Phiên bản iPhone 14 Pro Max 1TB/ 6GB được bán với giá 41,79 triệu đồng.

iPhone 14 Pro Max được bán với giá bao nhiêu

Khi nào iPhone 14 Pro Max được mở bán?
iPhone 14 Pro Max sẽ được giới thiệu chung với những sản phẩm khác nằm trong bộ sưu tập iPhone 14. Theo đó, chiếc flagship được giới thiệu với thị trường công nghệ trên toàn thế giới tại sự kiện Far Out của Apple được tổ chức vào ngày 8 tháng 9 năm 2022.

Khi nào iPhone 14 Pro Max được mở bán

Tuy nhiên, phiên bản iPhone 14 Pro Max chỉ được mở bán chính thức tại Việt Nam vào ngày 14 tháng 10 năm 2022. Nếu muốn là người sở hữu siêu phẩm iPhone sớm nhất, bạn có thể đặt trước từ ngày 7 đến 13 tháng 10.

Mua iPhone 14 Pro Max chính hãng VN/A chính hãng tại CellphoneS
iPhone 14 Pro Max hiện nay được trưng bày và mở bán trên khắp các chi nhánh của Hệ thống bán lẻ công nghệ CellphoneS. Vì là đại lý ủy quyền chính thức của thương hiệu Apple nên bạn hoàn toàn yên tâm về chất lượng sản phẩm khi mua hàng tại CellphoneS.

Mua iPhone 14 Pro Max chính hãng VN/A chính hãng tại CellphoneS

Nếu chọn mua iPhone 14 Pro Max ở CellphoneS, bạn còn được tham gia chương trình thu cũ đổi mới với mức trợ giá vô cùng hấp dẫn. Ngoài ra, CellphoneS cũng có thêm chương trình trả góp 0% lãi suất nhằm hỗ trợ khách hàng giảm gánh bớt gánh nặng tài chính nhưng vẫn sở hữu được chiếc iPhone yêu thích.

Bên cạnh đó, khách hàng khi mua iPhone cũng được áp dụng chính sách bảo hành 1 đổi 1 trong vòng 30 ngày khi sản phẩm gặp lỗi phần cứng từ nhà sản xuất. Bạn sẽ được bảo hành trong vòng 12 tháng sau khi mua tại Trung tâm bảo hành chính hãng Apple - Điện thoại Vui ASP. Nhanh chóng đến ngay chi nhánh CellphoneS gần nhất để được tư vấn chọn mua bạn nhé.
</div>
 </LayoutErp>
</template>

