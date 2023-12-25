/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50553
 Source Host           : localhost:3306
 Source Schema         : xcdy

 Target Server Type    : MySQL
 Target Server Version : 50553
 File Encoding         : 65001

 Date: 22/07/2018 17:03:51
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES (1, 'xcdy@Admin', '9820f98fb63321b17f715fd459ca4a02', '2018-07-22 14:02:34', '2018-07-22 14:02:34');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `migration` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES ('2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES ('2018_07_20_095854_create_questions_table', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  INDEX `password_resets_email_index`(`email`) USING BTREE,
  INDEX `password_resets_token_index`(`token`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for questions
-- ----------------------------
DROP TABLE IF EXISTS `questions`;
CREATE TABLE `questions`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '标题',
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '内容',
  `active` tinyint(3) NOT NULL DEFAULT 1 COMMENT '是否展示：1展示，-1不展示',
  `click` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '点击数',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `questions_title_unique`(`title`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of questions
-- ----------------------------
INSERT INTO `questions` VALUES (1, '本市积分落户申报资格条件是什么？', '<p style=\"text-indent: 2em;\">申请人需<span style=\"color: rgb(255, 0, 0);\"><strong>持有本市居住证、不超过法定退休年龄、在京连续缴纳社会保险7年及以上，且无刑事犯罪记录</strong></span>。这4个条件缺一不可。<span style=\"text-decoration: underline;\">需要注意的是，今年居住证的持有时间截止到细则发布前，即2018年4月10日前向本市公安机关申领《北京市居住证》，无论该证件目前是否有效，都可以参加2017年度的积分</span>。</p><p style=\"text-indent: 2em;\"><br/></p><table><tbody><tr class=\"firstRow\"><td width=\"194\" valign=\"top\" style=\"word-break: break-all; border-width: 1px; border-style: solid;\"><strong style=\"color: rgb(255, 0, 0); text-indent: 32px; white-space: normal;\">持有本市居住证</strong></td><td width=\"194\" valign=\"top\" style=\"word-break: break-all; border-width: 1px; border-style: solid;\"><strong style=\"color: rgb(255, 0, 0); text-indent: 32px; white-space: normal;\">不超过法定退休年龄</strong></td><td width=\"194\" valign=\"top\" style=\"word-break: break-all; border-width: 1px; border-style: solid;\"><strong style=\"color: rgb(255, 0, 0); text-indent: 32px; white-space: normal;\">在京连续缴纳社会保险7年及以上</strong></td><td width=\"194\" valign=\"top\" style=\"word-break: break-all; border-width: 1px; border-style: solid;\"><strong style=\"color: rgb(255, 0, 0); text-indent: 32px; white-space: normal;\">且无刑事犯罪记录</strong></td></tr></tbody></table><p><br/></p>', 1, 0, '2018-07-20 11:06:41', '2018-07-22 16:59:22');
INSERT INTO `questions` VALUES (2, '本市积分落户申报的积分指标是什么？', '<p style=\"text-indent: 2em;\">合法稳定就业指标、合法稳定住所指标、教育背景指标、职住区域指标、创新创业指标、纳税指标、年龄指标、荣誉表彰指标、守法记录指标。</p><p style=\"text-indent: 2em;\"><span style=\"text-decoration: line-through;\"><em><strong><span style=\"text-decoration: line-through; text-indent: 32px;\">合法稳定就业指标、合法稳定住所指标、教育背景指标、职住区域指标、创新创业指标、纳税指标、年龄指标、荣誉表彰指标、守法记录指标</span></strong></em></span></p><p><br/></p>', 1, 0, '2018-07-20 11:07:56', '2018-07-22 16:59:17');
INSERT INTO `questions` VALUES (3, '本市积分落户申报经办步骤有哪些？', '<p style=\"text-indent:43px\"><span style=\"font-size:21px;font-family:仿宋\">包括了系统注册、关联单位、积分填报、确认提交、数据比对、查看初核结果、复查及现场审核、发布及公示。具体流程如下：</span></p><p style=\"text-indent:43px\"><span style=\"font-size:21px;font-family:仿宋\">（1）系统注册：在京用人单位使用“法人一证通”数字证书，在规定时间内登录系统，完成注册并进入系统获取“单位注册码”。符合积分落户资格条件的申请人，可在单位注册通过后，在规定时间内进入服务专栏，点击“个人登录”完成注册。</span></p><p style=\"text-indent:43px\"><span style=\"font-size:21px;font-family:仿宋\">（2）关联单位：符合资格条件的申请人选择点击“积分落户业务”，进入系统后输入“单位注册码”，申请关联用人单位，用人单位核实申请人为本单位员工后，点击确认。</span></p><p style=\"text-indent:43px\"><span style=\"font-size:21px;font-family:仿宋\">（3）积分填报:申请人在规定时间内按系统所设项目如实填写积分指标信息，并保存提交。</span></p><p style=\"text-indent:43px\"><span style=\"font-size:21px;font-family:仿宋\">（4）确认提交：用人单位在规定时间内对申请人填报的积分指标信息审核无误后，确认提交。</span></p><p style=\"text-indent:43px\"><span style=\"font-size:21px;font-family:仿宋\">（5）数据核查：本市各有关部门分别对申请人填写的积分指标信息进行数据比对审核。</span></p><p style=\"text-indent:43px\"><span style=\"font-size:21px;font-family:仿宋\">（6）查看初核结果：申请人可以在规定时间内登录系统查看比对结果。</span></p><p style=\"text-indent:43px\"><span style=\"font-size:21px;font-family:仿宋\">（7）复查及现场审核：申请人可对部分指标项提出复查申请，并由用人单位在规定时间内向区积分落户服务窗口提交书面证明材料。部分指标项需要现场审核的，也应由用人单位在规定时间内向区积分落户服务窗口提交书面材料。复查及现场审核的材料受理可同时进行。</span></p><p style=\"text-indent:43px\"><span style=\"font-size:21px;font-family:仿宋\">（8）发布及公示：积分复查和现场审核结束后，申请人和用人单位可登录系统查询积分结果及年度落户分值。取得年度积分落户资格人员将在市政府网站予以公示，公示无异议的由市人力社保局办理调京手续。</span></p><p><br/></p>', 1, 0, '2018-07-20 15:08:13', '2018-07-22 16:57:49');
INSERT INTO `questions` VALUES (4, '为什么要出台《农民商业补充医疗保障方案》？', '<p style=\"text-indent: 2em;\">昌平区农民商<strong>业补充医疗保障是在现有城乡居民基本医疗保险及大病保险普惠制度基础上，对农村居民给予就医精准帮扶而进行补充医疗保障的惠</strong>农政策。为加大惠农支持力度，减轻农村居民医疗费用负担，增强低收入农户精准帮扶效果，结合昌平区实际，<span style=\"text-decoration: underline;\"><em>出台的方案</em></span>。</p><p><br/></p>', 1, 0, '2018-07-20 15:10:32', '2018-07-22 16:59:06');
INSERT INTO `questions` VALUES (5, '就业创业之职业技能培训', '<p style=\"text-indent:37px;line-height:27px\"><span style=\"font-size:19px;font-family:仿宋_GB2312\">在法定就业年龄内（男16-60周岁，女16-50周岁）有就业愿望和培训需求的本区户籍劳动力及离校未就业的当年高校毕业生每年可享受一次免费职业技能培训。本区户籍劳动力每年可以结合自身条件和就业需求，只能选择参加一次符合政策规定的职业技能培训或创业培训，创业培训与职业技能培训不能重复参加。创业培训或同一职业（工种）的同一等级的技能培训不能重复培训。</span></p><p><br/></p>', 1, 0, '2018-07-20 15:10:32', '2018-07-22 16:59:37');
INSERT INTO `questions` VALUES (6, '就业创业之创业培训', '<p style=\"text-indent:37px;line-height:27px\"><span style=\"color: rgb(255, 0, 0);\"><strong><span style=\"font-size: 19px; font-family: 仿宋_GB2312;\">本市城镇登记失业人员、本市农村转移就业劳动力、本市户籍应届及毕业2年内未就业的高校毕业生和本市户籍复员转业军人</span></strong></span><span style=\"font-size:19px;font-family:仿宋_GB2312\">可结合自身条件及创业需求，凭相关有效证件到创业培训定点培训机构报名，申请参加一次免费创业培训。</span></p><p><br/></p>', 1, 0, '2018-07-22 14:02:34', '2018-07-22 17:01:03');
INSERT INTO `questions` VALUES (8, '就业创业之实用技能培训', '<p style=\"text-indent:37px;line-height:27px\"><span style=\"font-size:19px;font-family:仿宋_GB2312\">凡有培训需求且有意向到二、三产业转移就业或正在二、三产业从业的山区镇农村户籍劳动力(男16-60岁，女16-50岁) 每年可结合自身需求和就业岗位特点选择参加一次免费实用技能培训。有培训意愿的山区农村劳动力可到所属镇街社保所或村就业服务站报名，由社保所或村就业服务站联系培训机构统一组织（注：山区镇指流村、延寿、南口、十三陵四镇。实用技能培训与职业技能非等级培训不能重复参加，同一培训项目不能重复参加）。</span></p><p><br/></p>', 1, 0, '2018-07-22 16:01:37', '2018-07-22 16:58:59');
INSERT INTO `questions` VALUES (9, '就业创业之扶持创业奖励政策', '<p style=\"text-indent:37px;line-height:27px\"><strong><span style=\"font-size:19px;font-family:仿宋_GB2312\">（1）自主创业奖励</span></strong></p><p style=\"text-indent:37px;line-height:27px\"><span style=\"font-size:19px;font-family:仿宋_GB2312\">本区城乡劳动力依法创办个体工商户或小企业，自创办之日起2年内，招用本区城乡劳动力3人及以上、签订1年及以上劳动合同、按规定办理单位就业登记或转移就业登记手续、按规定缴纳职工社会保险和发放工资、且稳定就业6个月及以上，可申请2万元的一次性自主创业奖励。</span></p><p style=\"text-indent:37px;line-height:27px\"><strong><span style=\"font-size:19px;font-family:仿宋_GB2312\">（2）商业贷款财政贴息</span></strong></p><p style=\"text-indent:37px;line-height:27px\"><span style=\"font-size:19px;font-family:仿宋_GB2312\">本区城乡劳动力开办的个体工商户，在金融机构获取不超过20万元商业贷款用于创业经营的，招用本区城乡劳动力达3人且稳定就业达1年以上的，可申请区财政按照同期贷款基准利率给予的100%贴息；贴息期限最长2年。</span></p><p><br/></p>', 1, 0, '2018-07-22 16:02:09', '2018-07-22 16:58:53');
INSERT INTO `questions` VALUES (10, '就业创业之自谋职业灵活就业社会保险补贴', '<p style=\"line-height: 27px; text-indent: 2em;\"><strong><span style=\"font-size:19px;font-family: 仿宋_GB2312\">自谋职业(自主创业)社会保险补贴：</span></strong><span style=\"font-size:19px;font-family:仿宋_GB2312\">在失业期间依法申领《个体工商户营业执照》、《税务登记证》，正常经营3个月以上，并按规定办理了就业登记手续的，在市或区、县职业介绍服务中心办理了个人委托存档手续的，本市城镇登记失业的“4050”人员、中重度残疾人员、初次来京的随军家属、“零就业家庭”人员及失业登记一年以上人员，可申请3至5年的自谋职业(自主创业)社会保险补贴。</span></p><p style=\"line-height: 27px; text-indent: 2em;\"><span style=\"font-size:19px;font-family:仿宋_GB2312\"></span></p><p style=\"line-height: 27px; text-indent: 2em;\"><strong><span style=\"font-size:19px;font-family: 仿宋_GB2312\">灵活就业社会保险补贴：</span></strong><span style=\"font-size:19px;font-family: 仿宋_GB2312\">本市城镇登记失业的“4045”人员、中重度残疾人员、初次来京的随军家属、“零就业家庭”人员及失业登记一年以上人员，并按规定办理了就业登记手续的，在市或区、县职业介绍服务中心办理了个人委托存档手续的，实现灵活就业满30日，可申请3至5年的灵活就业社会保险补贴。</span></p><p style=\"line-height: 27px; text-indent: 2em;\"><span style=\"font-size:19px;font-family: 仿宋_GB2312\"></span></p><p style=\"line-height: 27px; text-indent: 2em;\"><strong><span style=\"font-size:19px;font-family: 仿宋_GB2312\">补贴标准：</span></strong><span style=\"font-size:19px;font-family:仿宋_GB2312\">基本养老保险和失业保险以本市上年度职工月平均工资标准的40%为缴费基数，分别补贴14%和6%;个人分别缴纳1%和0.2%。基本医疗保险以本市上年度职工月平均工资标准的70%为缴费基数，补贴6%，个人缴纳1%。</span></p><p style=\"line-height: 27px; text-indent: 2em;\"><span style=\"font-size:19px;font-family: 仿宋_GB2312\"></span><br/></p><p style=\"line-height: 27px; text-indent: 2em;\"><span style=\"font-size:19px;font-family:仿宋_GB2312\"></span><br/></p><p><br/></p>', 1, 0, '2018-07-22 16:03:00', '2018-07-22 16:58:47');
INSERT INTO `questions` VALUES (11, '高校毕业生就业创业之创业奖励', '<p style=\"line-height: 31px; text-indent: 2em;\"><strong><span style=\"font-size:21px;font-family:宋体\">自主创业奖励:</span></strong><span style=\"font-size:21px;font-family:仿宋_GB2312\">2017</span><span style=\"font-size:21px;font-family: 仿宋_GB2312\">年1月1日以后，毕业5年以内持有《毕业证书》的本区高校毕业生依法创办个体工商户或小企业，自创办之日起2年内，招用本区城乡劳动力3人及以上、签订1年及以上劳动合同、按规定办理单位就业登记或转移就业登记手续、按规定缴纳职工社会保险和发放工资、且稳定就业6个月及以上，可申请2万元的一次性自主创业奖励。</span></p><p style=\"text-indent:43px;line-height:31px\"><strong><span style=\"font-size: 21px;font-family:宋体\">商业贷款财政贴息:</span></strong><span style=\"font-size:21px;font-family:仿宋_GB2312\">持有《毕业证书》且尚未就业的高校毕业生创办的个体工商户，在金融机构获取不超过20万元商业贷款用于创业经营的，招用本区城乡劳动力达3人且稳定就业达1年以上的，可申请区财政按照同期贷款基准利率给予的100%贴息；贴息期限最长2年。</span></p><p style=\"text-indent:43px;line-height:31px\"><strong><span style=\"font-size: 21px;font-family:宋体\">小额担保贷款:</span></strong><span style=\"font-size:21px;font-family:仿宋_GB2312\">持有《毕业证书》且尚未就业的高校毕业生依法创办个体工商户，自主创办或合伙创办小型、微型企业，（经营项目不属于房地产、娱乐、广告、桑拿、按摩、网吧、氧吧）可申请10万-100万的小额担保贷款。</span></p><p style=\"text-indent:43px;line-height:31px\"><strong><span style=\"font-size: 21px;font-family:宋体\">小额担保贷款财政贴息:</span></strong><span style=\"font-size:21px;font-family:仿宋_GB2312\">申请了小额担保贷款的个体工商户、小型微型企业，从事微利项目可申请市财政贴息，不符合市财政贴息范围或享受部分市级财政贴息的，由区财政全额或者补齐市级财政贴息剩余部分。小额担保贷款的利率一般按照中国人民银行公布的同期贷款基准利率执行，最高可上浮3个百分点。实际利率由经办银行与借款人以借款合同签订日约定的贷款利率执行，财政按实际利率据实贴息，贷款期限一般不超过2年，展期和逾期不贴息。</span></p><p><br/></p>', 1, 0, '2018-07-22 16:08:59', '2018-07-22 16:58:40');
INSERT INTO `questions` VALUES (12, '高校毕业生就业创业之创业平台吸纳就业', '<p style=\"text-indent:43px;line-height:31px\"><span style=\"font-size:21px;font-family:仿宋_GB2312\">毕业5年以内持有《毕业证书》的本区高校毕业生在“昌平双创服务平台”内创业，创业实体的成活期不少于12个月，每个创业实体可为平台争取1万元的一次性奖励。</span></p><p><br/></p>', 1, 0, '2018-07-22 16:09:16', '2018-07-22 16:58:32');
INSERT INTO `questions` VALUES (13, '高校毕业生就业创业之就业手续办理', '<p style=\"text-indent:43px;line-height:36px\"><span style=\"font-size:21px;font-family:仿宋\">北京生源大中专毕业生离校后，持毕业院校所在省、直辖市、自治区毕业生就业工作部门签发的《就业报到证》到就业单位或家庭户籍所在地区县人力资源和社会保障局毕业生就业工作部门报到，办理接转档案等相关手续。离校后未就业北京生源大中专毕业生报到后实现初次就业时，由家庭户籍所在区县人力资源和社会保障局毕业生就业工作部门在《就业报到证》上一次性签注就业手续。已在京就业北京生源大中专毕业生调整工作的，不再办理在《就业报到证》上签注调整意见的手续，工作变动时，均按照人员调动程序办理档案接转手续。北京生源大中专毕业生毕业时选择在京外地区初次就业，《就业报到证》签署至京外地区，户口仍保留在北京市，需回到北京市企业就业，或需本市提供就业援助服务的，可办理档案回京接转手续，并可在本市自由流动。</span></p><p><br/></p>', 1, 0, '2018-07-22 16:09:47', '2018-07-22 16:58:24');
INSERT INTO `questions` VALUES (14, '高校毕业生就业创业之职业技能培训', '<p style=\"text-indent:43px;line-height:36px\"><span style=\"font-size:21px;font-family:仿宋\">在法定就业年龄内（男16-60周岁，女16-50周岁）有就业愿望和培训需求的离校未就业高校毕业生当年可享受一次免费职业技能培训。</span></p><p><br/></p>', 1, 0, '2018-07-22 16:10:13', '2018-07-22 16:58:18');
INSERT INTO `questions` VALUES (15, '高校毕业生就业创业之创业培训', '<p style=\"text-indent:43px;line-height:36px\"><span style=\"font-size:21px;font-family:仿宋\">本市户籍应届及毕业2年内未就业的高校毕业生和本市户籍复员转业军人可结合自身条件及创业需求，凭相关有效证件到创业培训定点培训机构报名，申请参加一次免费创业培训。</span></p><p><br/></p>', 1, 0, '2018-07-22 16:41:36', '2018-07-22 16:58:06');
INSERT INTO `questions` VALUES (16, '高校毕业生就业创业之就业见习', '<p style=\"line-height: 36px; text-indent: 2em;\"><span style=\"font-size:21px;font-family:仿宋_GB2312\">就业见习是指组织毕业3年以内的北京生源离校未就业高校毕业生，进入经认定的见习基地，享受政府补贴，在具体工作岗位上，进行3至6个月的全日制就业培训，积累工作经验，促进就业的制度。符合条件的高校毕业生可到户籍所在区人力资源和社会保障局报名参加就业见习。见习人员进入见习基地参加就业见习，见习基地要及时与见习人员签订《北京市高校毕业生就业见习协议书》，明确见习岗位、见习期限、基本生活补助标准等，以及双方应履行的义务和责任。见习人员基本生活补助按月发放，由见习基地和政府补贴分担。财政专项补贴先由见习基地垫付，见习人员见习期满，经市人力资源和社会保障局核准后将财政专项补贴划拨到见习基地，见习人员只能享受一次就业见习财政专项补贴。基本生活补助标准根据我市经济发展和物价水平合理确定并及时调整。</span></p><p><br/></p>', 1, 0, '2018-07-22 16:42:00', '2018-07-22 16:58:00');

SET FOREIGN_KEY_CHECKS = 1;
