-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2025 at 01:40 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guru`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'admin', 'example@gmail.com', 'admin@2025', '2025-05-31 10:58:04');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `img` varchar(1024) NOT NULL,
  `title` varchar(255) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `category` varchar(255) NOT NULL,
  `dec` varchar(2048) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `sub_category` varchar(100) NOT NULL,
  `uniqid` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `sub_category`, `uniqid`, `created_at`) VALUES
(3, 'Startup Incubator', 'Starting Strong With Strategic Clarity For Small Businesses!!', '68566205d8743', '2025-06-21 13:10:53'),
(4, 'Growth Accelerator', 'Speed & Agile Execution for Small Business Growth!!', '68566219d0722', '2025-06-21 13:11:13'),
(5, 'Profit Maximizer', 'Enterprise Outreach, Resilience & Combat Readiness For Small Businesses!!', '68566241846fc', '2025-06-21 13:11:53'),
(6, 'Second Opinion Validator', 'Second-Opinion Compass To Take Confident Decisions For Small Businesses!!', '6856625e95239', '2025-06-21 13:12:22'),
(7, 'Performance Auditor', 'Precision Audits For Small-Business Excellence!!', '685662761b787', '2025-06-21 13:12:46'),
(8, 'Future Ready Automator', 'Precision-Powered, Future-Proof, Self-Optimizing Small Business Engine!!', '685662892f504', '2025-06-21 13:13:05');

-- --------------------------------------------------------

--
-- Table structure for table `our`
--

CREATE TABLE `our` (
  `id` int(11) NOT NULL,
  `whom` varchar(1024) NOT NULL,
  `deliver` varchar(1024) NOT NULL,
  `solution` varchar(1024) NOT NULL,
  `get` varchar(1024) NOT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `our`
--

INSERT INTO `our` (`id`, `whom`, `deliver`, `solution`, `get`, `category`, `created_at`) VALUES
(9, '<ul><li>Final Year Students Aspiring to Start a Business</li><li>Professionals Aspiring to Start a Business</li><li>Entrepreneurs With Less Than 2 years Business Journey</li><li>Small Business Owners Struggling at Foundation Level&nbsp;</li></ul>', '<ul><li>Discovery &amp; Assessment</li><li>Strategy Blueprint</li><li>Prototyping &amp; Validation</li><li>Pilot &amp; Launch</li><li>Transition &amp; Handover</li></ul>', '<ul><li><strong>Precision:</strong>&nbsp;We start by clearly defining the core challenge - so we tackle the right problem, not symptoms.</li><li><strong>Actionable:</strong>&nbsp;From ideation to prototype, we emphasize validated learning to reduce risk.</li><li><strong>Practical Momentum:</strong>&nbsp;Pilots, KPIs, and real-world results drive forward progress at each stage.</li><li><strong>Sustainable Results:</strong>&nbsp;We ensure tools, data, and team capabilities are in place for long-term success.</li></ul>', '<p><span style=\"background-color: rgb(255, 255, 255); color: rgb(93, 102, 111);\">These structured deliverables log not only captures progress at each phase but ensures transparency, accountability, and ease of handover - empowering your business to continue confidently after our engagement.</span></p>', '68566205d8743', '2025-06-21 13:17:48'),
(10, '<ul><li>Entrepreneurs With 2 to 5 Years Business Journey always engaged in Fire Fighting</li><li>Small Business Owners Struggling to Grow Organically &amp; Face Cash Flow Constraints</li><li>MSME’s Facing Stagnation and Slow Momentum in Growth&nbsp;</li></ul>', '<ul><li>GTM Strategy &amp; Market Launch</li><li>Sales &amp; Marketing Execution</li><li>Team Building &amp; Capability Development</li><li>Cash Flow &amp; Financial Enablers</li><li>Sustainable Path</li><li>Monitor, Iterate &amp; Scale</li></ul>', '<ul><li>End-to-end acceleration from launch to scale - covering GTM, finance, people and sustainability.</li><li>Hands-on implementation with structured sprints, coaching, and active optimization.</li><li>Data &amp; metrics driven-ensuring measurable impact and future-readiness.</li></ul>', '<p><span style=\"background-color: rgb(255, 255, 255); color: rgb(93, 102, 111);\">You gain not only strategy and planning, but also hands-on setup, team enablement, financial clarity, operational robustness, and continuous improvement-ensuring you can&nbsp;</span><strong style=\"color: rgb(93, 102, 111);\">launch, scale, and sustain growth with confidence.</strong></p>', '68566219d0722', '2025-06-21 13:19:02'),
(11, '<ul><li>Entrepreneurs With 2 to 5 Years Business Journey</li><li>Small Business Owners Struggling to Regularize Profits</li><li>MSME’s Facing Team Dynamics Issues, Lack of Processes &amp; Sustainable Strategies</li><li>Medium Business Owners not able to manage Operations &amp; Maintain Lead over Competition</li></ul>', '<ul><li>Profit &amp; Pricing Optimization</li><li>Process Efficiencies &amp; Cost Management</li><li>Cash Flow Enablement &amp; Forecasting</li><li>Data-Driven Performance Monitoring</li><li>Financial Governance &amp; Risk Preparedness</li><li>Continuous Improvement &amp; Strategic Scaling</li></ul>', '<ul><li>Boosts profitability with smarter pricing and performance-based cost control.</li><li>Generates reliable cash flow, reducing dependency on external financing.</li><li>Builds business resilience through operational discipline and risk preparedness.</li><li>Informs smarter decisions via real-time metrics, forecasting, and iterative improvement.</li></ul>', '<p><span style=\"background-color: rgb(255, 255, 255); color: rgb(93, 102, 111);\">Experience empowered decision-making through predictive analytics and scenario planning-ensuring you\'re always ready for any business challenge through optimized processes that slash costs and boost resilience.</span></p>', '68566241846fc', '2025-06-21 13:20:09'),
(12, '<ul><li>Small Business Owners Getting Stuck in Cross Roads of Taking a Vital Decision regarding Talent Management (Talent Acquisition, Talent Management, Talent Engagement, Succession Planning)</li><li>Medium Sized Business Establishments Facing Challenges in Critical Decision Making like Expansion, Investments, New Product Introduction, New Marketing Strategy, Diversification, Collaboration with Outsiders/Business Entity, Team Enlargements etc...</li></ul>', '<ul><li>Context Discovery &amp; Framing</li><li>Benchmarking &amp; Industry Comparison</li><li>Strategic Diagnosis &amp; Assumption Testing</li><li>Independent Insight &amp; Alternative Scenarios</li><li>Recommendation &amp; Decision Blueprint</li><li>Stakeholder Workshop &amp; Handover</li></ul>', '<p>My engagement concludes not just with feedback-but with rigorous benchmarking, objective insights, strategic alternatives, and a clear, actionable roadmap ready for implementation. You walk away not just reassured-you’re&nbsp;<strong>set up to succeed</strong>&nbsp;as I provide...</p><p><br></p><ol><li><strong>Unbiased Perspective - </strong>Fresh skillful eyes spot gaps that internal stakeholders often miss</li><li><strong>Risk Mitigation &amp; Confidence - </strong>Reduces blind spots and affords strategic peace of mind</li><li><strong>Decision-Ready Outputs - </strong>Provides actionable briefings and facilitation to lead execution</li></ol>', '<p><span style=\"background-color: rgb(255, 255, 255); color: rgb(93, 102, 111);\">Walk away with a vetted roadmap featuring alternative scenarios and clear decision criteria-giving you confidence, credibility, and a path forward by gaining a sharp, unbiased diagnosis from seasoned experts who uncover missed opportunities, challenge assumptions, and mitigate strategic risks.</span></p>', '6856625e95239', '2025-06-21 13:22:50'),
(13, '<ul><li>Medium Sized Business Establishments Struggling to Sustain Growth by Not Able to Engage Employees Constructively.</li><li>Medium Sized Business Establishments Having Minimum of 20 members to 75 members Facing Acute Challenges in Team Performance Oriented Aspects.</li></ul>', '<ul><li>Audit Planning &amp; Scope Definition</li><li>Data Collection &amp; Fieldwork</li><li>Analysis &amp; Diagnostic Assessment</li><li>Findings &amp; Recommendations</li><li>Reporting &amp; Stakeholder Presentation</li><li>Action Planning &amp; Implementation</li><li>Follow-Up &amp; Performance Monitoring</li></ul>', '<ul><li><strong>Systematic &amp; Objective:</strong>&nbsp;Structured planning and criteria ensure fair, comprehensive evaluation.</li><li><strong>Data-Driven Insights:</strong>&nbsp;Rigorous diagnostics reveal misalignments and inefficiencies early.</li><li><strong>Tangible Reforms:</strong>&nbsp;Action plans are backed by clear accountability and measurable impact.</li><li><strong>Sustained Impact:</strong>&nbsp;Ongoing monitoring embeds a culture of performance readiness and continuous improvement.</li></ul>', '<p><span style=\"background-color: rgb(255, 255, 255); color: rgb(93, 102, 111);\">Receive a sharp, data-driven performance dashboard and audit report that transparently maps your team and organizational alignment against your vision. Gain clear, prioritized recommendations &amp; SMART action plans that pinpoint inefficiencies, optimize workflows, andelevate operational excellence. Empower your leadership with follow-up tools and KPI tracking-ensuring ongoing accountability, agility, and sustainable growth.</span></p>', '685662761b787', '2025-06-21 13:24:31'),
(14, '<ul><li>Small Business Owners Seeking Autonomy in their Operations and the way in streamlining their business seamlessly.</li><li>Medium Sized Business Enterprises which seek diversification and wants their current business to run on auto pilot mode with their very minimal intervention by developing AI enabled Business Ecosystem.&nbsp;</li></ul>', '<ul><li>Opportunity &amp; ROI Blueprint</li><li>Autopilot Process Designs</li><li>Automation Stack &amp; AI Agent Setup</li><li>Launch, Validation &amp; Optimization</li><li>Enterprise Rollout &amp; Training</li><li>Live Performance &amp; AI-Autonomy</li><li>Support &amp; Continuous Improvement</li></ul>', '<ul><li><strong>Full Autonomy:</strong>&nbsp;Teams become stakeholders in tactical process control, freeing founders to focus on strategic growth and diversification.</li><li><strong>Resilience Built-In:</strong>&nbsp;AI-driven dashboards and alerts ensure ongoing alignment, situational awareness, and quick tactical response.</li><li><strong>Scalable Intelligence:</strong>&nbsp;Agentic AI continuously learns from real data-enhancing efficiency and decision quality over time.</li></ul>', '<p><span style=\"color: rgb(93, 102, 111); background-color: rgb(255, 255, 255);\">You’ll receive AI and RPA-powered automated workflows that cut error rates by up to 50-75% and boost operational efficiency by 30-90%, freeing your team from routine tasks and accelerating throughput. You’ll gain interactive, real-time KPI dashboards that monitor cycle time, cost savings, accuracy, and predictive alerts-enabling proactive, data-backed decision-making Plus, you’ll have a self-driving operational engine where your team handles only strategic decisions while automated systems run day-to-day tasks autonomously, giving you space to scale, innovate, and grow.</span></p>', '685662892f504', '2025-06-21 13:25:54');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `img` varchar(1024) NOT NULL,
  `dec` longtext NOT NULL,
  `price` longtext NOT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `img`, `dec`, `price`, `category`, `created_at`) VALUES
(21, '../uploads/solutions/685662bdcb2ad.png', 'Build. Refine. Launch. Succeed. We explore untapped possibilities, design clear growth pathways, shape and test working models, bring ideas to life with controlled rollouts, and empower you to take charge with confidence. We will co-create and test MVPs that work, pilot real-world launches, and ensure you’re ready to lead.', '', '68566205d8743', '2025-06-21 13:13:57'),
(22, '../uploads/solutions/685662d9dc9e8.png', '\r\nAccelerate. Win. Endure. We ignite rapid growth with precise market entry plans, hands-on sales and promotion drives, and strong teams built for the future. Our approach secures healthy cash flows, strengthens financial foundations, and charts a resilient success route. With ongoing tracking, refinement, and expansion, we help you stay ahead - and stay there.', '', '68566219d0722', '2025-06-21 13:14:25'),
(23, '../uploads/solutions/685662f1da307.png', 'Sharpen, Strengthen, Scale. Our Maximizer service helps you unlock hidden profits through smarter pricing and cost controls, boost cash flow with accurate forecasting, and drive efficiency across operations. With data-powered performance tracking, robust financial governance, and a clear path for continuous improvement, we position your business for lasting strength and smart scaling.', '', '68566241846fc', '2025-06-21 13:14:49'),
(24, '../uploads/solutions/685663083de11.png', 'Clarity. Confidence. Better Decisions. We step in as your independent thinking partner - uncovering context, benchmarking against the best, and challenging assumptions with fresh eyes. Our deep-dive diagnosis, alternative scenarios, and actionable decision blueprint equip you to choose wisely. With focused stakeholder workshops, we ensure alignment and a smooth handover - so you move forward with certainty.', '', '6856625e95239', '2025-06-21 13:15:12'),
(25, '../uploads/solutions/6856631e30a1c.png', 'Reveal Gaps. Drive Results. Elevate Performance. We deliver a sharp, end-to-end audit - from defining the scope to deep data dives and diagnostic reviews. Our insights uncover what’s working, what’s holding you back, and what to do next. With clear recommendations, focused action plans, and ongoing performance tracking, we help you turn audit findings into real, measurable impact. Our audits are transparent and gives you a data-backed snapshot of your organization—highlighting bottlenecks, misaligned workflows, and hidden cost drains-so you can fix inefficiencies, strengthen accountability, and streamline operations.', '', '685662761b787', '2025-06-21 13:15:34'),
(26, '../uploads/solutions/6856633477faa.png', '\r\nTransform your operations into a high-performing autopilot-where AI-powered workflows, real-time dashboards, and accountable teams run routine tasks with 70-90% fewer errors and up to 30-90% greater efficiency. Experience predictive decision-making and seamless process control-so your leaders tackle only high-impact strategy while AI handles the rest.', '', '685662892f504', '2025-06-21 13:15:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our`
--
ALTER TABLE `our`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `our`
--
ALTER TABLE `our`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
