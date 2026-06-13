# Rules of Engagement (RoE) - WIC2007 Security Audit

## Objective

Conduct an AI-assisted security audit against the designated vulnerable Docker application using PentAGI.

## Target Application

DVWA (Damn Vulnerable Web Application)

## Target Scope

### Allowed Target

* Application: Damn Vulnerable Web Application (DVWA)
* Host: http://vulnerable-app (The target must be accessed via this container hostname within the isolated Docker network)

### Allowed Ports

* TCP 80 (HTTP)

### Out of Scope

* Host operating system
* University network
* Public IP addresses
* Any third-party system
* Student laptops

## Allowed Activities

* Reconnaissance within target scope
* Vulnerability identification
* SQL Injection testing
* XSS testing
* Authentication testing
* Security verification

## Prohibited Activities

### 1. Denial of Service (DoS)

The AI agent must not perform flooding, stress testing, or resource exhaustion attacks.

### 2. External Network Scanning

The AI agent must not scan any public IP address or external system.

### 3. Persistence or Malware Deployment

The AI agent must not install malware, backdoors, persistence mechanisms, reverse shells, or ransomware.

### 4. Privilege Escalation Outside Scope

The AI agent must not attempt privilege escalation beyond the designated Docker environment.

## Budget Limitation

Maximum budget:

USD 0.50

The orchestration system must automatically terminate execution once the budget threshold is reached.

## Escalation Procedure

If the AI agent attempts a prohibited action:

1. Stop execution immediately.
2. Record the violation in the execution log.
3. Mark the action as policy violation.
4. Prevent further execution.
5. Require manual review before restarting the session.

## Approval

This Rules of Engagement applies only to the designated WIC2007 assessment environment. All activities are limited to the local, isolated Docker environment owned by the student, ensuring compliance with the Computer Crimes Act 1997 (Malaysia) and relevant cybersecurity ethics.
